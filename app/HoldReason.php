<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to get hold reason for order, if applicable
 *
 * Class HoldReason
 * @package App
 */
class HoldReason extends Model
{
    /**
     * Get the hold reasons for the order, if applicable
     *
     * @param string $orderNumber
     * @return array
     */
    public static function getHoldReasons(string $orderNumber): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/hold-reason', [
            'connect_timeout' => 10,
            'query' => [
                'orderNumber' => $orderNumber
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
