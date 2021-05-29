<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to return the invoice address for the specified customer
 *
 * Class InvoiceAddress
 * @package App
 */
class InvoiceAddress extends Model
{

    /**
     * Get the invoice address for the customer
     *
     * @param string $customer
     * @return array
     */
    public static function getInvoiceDetails(string $customer): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/customer/address/invoice', [
            'connect_timeout' => 10,
            'query' => [
                'customer' => $customer
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
