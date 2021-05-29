<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to return the payments for the specified order number
 *
 * Class Payment
 * @package App
 */
class Payment extends Model
{
    /**
     * Get the payments for the specified order
     *
     * @param string $orderNumber
     * @return array
     */
    public static function getPaymentDetails(string $orderNumber): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/payments', [
            'connect_timeout' => 10,
            'query' => [
                'orderNumber' => $orderNumber
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
