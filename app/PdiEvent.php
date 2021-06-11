<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to get any PDI Events
 *
 * Class PdiEvent
 * @package App
 */
class PdiEvent extends Model
{
    /**
     * Get any PDI events for the order
     *
     * @param string $orderNumber
     * @return array
     */
    public static function getPdiEvents(string $orderNumber): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/pdi-events', [
            'connect_timeout' => 10,
            'query' => [
                'orderNumber' => $orderNumber
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
