<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to return the order lines for the specified order number
 *
 * Class OrderLine
 * @package App
 */
class OrderLine extends Model
{
    /**
     * Get the order lines for the specified order
     *
     * @param string $orderNumber
     * @return array
     */
    public static function getOrderLines(string $orderNumber): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/order-lines', [
            'connect_timeout' => 10,
            'query' => [
                'orderNumber' => $orderNumber
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
