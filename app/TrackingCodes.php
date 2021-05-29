<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to get the tracking data for orders
 *
 * Class TrackingCodes
 * @package App
 */
class TrackingCodes extends Model
{
    /**
     * Get the tracking data, where applicable
     *
     * @param string $loadNoteNumber
     * @return array
     */
    public static function getTrackingCodes(string $loadNoteNumber): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/tracking-codes', [
            'connect_timeout' => 10,
            'query' => [
                'loadNote' => $loadNoteNumber
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
