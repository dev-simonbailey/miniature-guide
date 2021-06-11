<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to get any Despatch Events
 *
 * Class DespatchEvent
 * @package App
 */
class DespatchEvent extends Model
{
    /**
     * Get any despatch events for the order
     *
     * @param string $orderNumber
     * @return array
     */
    public static function getDespatchEvents(string $orderNumber): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/despatch-events', [
            'connect_timeout' => 10,
            'query' => [
                'orderNumber' => $orderNumber
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
}
