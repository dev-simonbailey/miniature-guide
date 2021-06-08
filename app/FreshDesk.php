<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class FreshDesk extends Model
{
    /**
     * Get the tickets for this customer
     *
     * @param string $email
     * @return mixed
     */
    public static function getFreshDeskDataByEmail(string $email)
    {
        $client = new Client();
        $encodedEmail = urlencode($email);
        $response = $client->get('https://ribblecycles.freshdesk.com/api/v2/tickets?email=' . $encodedEmail, [
            'auth' => [
                env('FRESHDESK_USERNAME'),
                env('FRESHDESK_PASSWORD')
            ]
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * Convert status integers to real names
     *
     * @param int $statusValue
     * @return string
     */
    public static function freshdeskConvertStatus(int $statusValue): string
    {
        switch ($statusValue) {
            case 2:
                $convertedStatus = 'open';
                break;
            case 3:
                $convertedStatus = 'Pending';
                break;
            case 4:
                $convertedStatus = 'Resolved';
                break;
            case 5:
                $convertedStatus = 'Closed';
                break;
            case 7:
                $convertedStatus = 'Waiting on Third Party - Internal';
                break;
            case 8:
                $convertedStatus = 'Customer Responded';
                break;
            case 9:
                $convertedStatus = 'Awaiting Callback';
                break;
            case 10:
                $convertedStatus = 'Waiting on Third Party - External';
                break;
            case 11:
                $convertedStatus = 'Chase up Third Party';
                break;
            default:
                $convertedStatus = $statusValue;
                break;
        }
        return $convertedStatus;
    }

    /**
     * Set left border colour based on ticket status
     *
     * @param int $statusValue
     * @return string
     */
    public static function freshdeskTicketStatusColour(int $statusValue): string
    {
        switch ($statusValue) {
            case 2:
            case 8:
            case 9:
            case 11:
                $convertedColor = 'leftOrange';
                break;
            case 3:
            case 7:
            case 10:
                $convertedColor = 'leftGreen';
                break;
            case 4:
            case 5:
            default:
                $convertedColor = 'leftGray';
                break;
        }
        return $convertedColor;
    }


    /**
     * Get the group name from the id
     *
     * @param int $groupValue
     * @return string
     */
    public static function freshdeskConvertGroup(int $groupValue): string
    {
        $client = new Client();
        $response = $client->get('https://ribblecycles.freshdesk.com/api/v2/groups/' . $groupValue, [
            'auth' => [
                env('FRESHDESK_USERNAME'),
                env('FRESHDESK_PASSWORD')
            ]
        ]);
        $groupArray = json_decode($response->getBody(), true);
        return $groupArray['name'];
    }


    /**
     * Convert Priority integers to real names
     *
     * @param int $priorityValue
     * @return string
     */
    public static function freshdeskConvertPriority(int $priorityValue): string
    {
        switch ($priorityValue) {
            case 1:
                $convertedPriority = 'Low';
                break;
            case 2:
                $convertedPriority = 'Medium';
                break;
            case 3:
                $convertedPriority = 'High';
                break;
            case 4:
                $convertedPriority = 'Urgent';
                break;
            default:
                $convertedPriority = $priorityValue;
                break;
        }
        return $convertedPriority;
    }

    /**
     * Get the agent name from the id
     *
     * @param int $responderId
     * @return string
     */
    public static function freshdeskConvertResponderId(int $responderId): string
    {
        $client = new Client();
        $response = $client->get('https://ribblecycles.freshdesk.com/api/v2/agents/' . $responderId, [
            'auth' => [
                env('FRESHDESK_USERNAME'),
                env('FRESHDESK_PASSWORD')
            ]
        ]);
        $agentArray = json_decode($response->getBody(), true);
        return $agentArray['contact']['name'];
    }

    public static function freshdeskDateFormatter(string $dateToFormat): string
    {
        return date('d/m/Y - H:m', strtotime($dateToFormat));
    }
}
