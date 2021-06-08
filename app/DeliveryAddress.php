<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to return the delivery address of the specified customer
 *
 * Class DeliveryAddress
 * @package App
 */
class DeliveryAddress extends Model
{
    /**
     * Get the delivery address for the customer
     *
     * @param string $customer
     * @return array
     */
    public static function getDeliveryDetails(string $customer): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/customer/address/delivery', [
            'connect_timeout' => 10,
            'query' => [
                'customer' => $customer
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
