<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class StockAllocation extends Model
{
    /**
     * Get the stock allocations for the specified order
     *
     * @param string $orderNumber
     * @return array
     */
    public static function getStockAllocations(string $orderNumber): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/stock-allocations', [
            'connect_timeout' => 10,
            'query' => [
                'orderNumber' => $orderNumber
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
