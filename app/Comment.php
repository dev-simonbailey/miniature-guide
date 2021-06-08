<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * Class to return the comments for the specified customer
 *
 * Class Comment
 * @package App
 */
class Comment extends Model
{
    /**
     * Get the comments for the specified customer
     *
     * @param string $customer
     * @return array
     */
    public static function getComments(string $customer): array
    {
        $client = new Client();
        $response = $client->get(env('BLUESKY_API_HOST') . '/api/customer/comments', [
            'connect_timeout' => 10,
            'query' => [
                'customer' => $customer
            ]
        ]);
        return json_decode($response->getBody(), true);

    }
}
