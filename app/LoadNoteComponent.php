<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to get the load note components
 *
 * Class LoadNoteComponent
 * @package App
 */
class LoadNoteComponent extends Model
{
    /**
     * Get the load note components
     *
     * @param string $loadNote
     * @param string $loadLine
     * @return array
     */
    public static function getLoadNoteComponents(string $loadNote, string $loadLine): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/load-note-components', [
            'connect_timeout' => 10,
            'query' => [
                'loadNote' => $loadNote,
                'loadLine' => $loadLine
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
