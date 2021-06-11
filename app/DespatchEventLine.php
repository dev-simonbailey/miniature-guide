<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to get the despatch event lines
 *
 * Class DespatchEventLine
 * @package App
 */
class DespatchEventLine extends Model
{
    /**
     * Get the despatch event lines
     *
     * @param string $orderNumber
     * @return array
     */
    public static function getDespatchEventLines(string $loadNote): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/despatch-event-lines', [
            'connect_timeout' => 10,
            'query' => [
                'loadNote' => $loadNote
            ]
        ]);
        return json_decode($response->getBody(), true);
    }
}
