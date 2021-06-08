<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to return the load note header for the specified load note
 *
 * Class LoadNoteHeader
 * @package App
 */
class LoadNoteHeader extends Model
{
    /**
     * Get the load note header for the specified load note
     *
     * @param string $orderNumber
     * @return array
     */
    public static function getLoadNoteHeader(string $orderNumber): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/load-note-header', [
            'connect_timeout' => 10,
            'query' => [
                'orderNumber' => $orderNumber
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
