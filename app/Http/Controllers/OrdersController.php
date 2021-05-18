<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\View\Factory;
use Illuminate\View\View;
use GuzzleHttp\Client;


class OrdersController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $opName;

    public function __construct()
    {
        $path = explode('\\', __CLASS__);

        $this->opName = strtolower(str_replace('Controller', '', array_pop($path)));

    }

    /**
     * Get all orders with pagination
     *
     * @return Application|\Illuminate\Contracts\View\Factory|View
     * @throws GuzzleException
     */
    public function index()
    {

        $client = new Client;

        $request = $client->request('GET', env('BLUESKY_API_HOST').'/api/orders');

        $response = $request->getBody();

        $orders_response = Collection::make(json_decode($response->getContents(),true));

        $orders = $this->paginate($orders_response,2);

        $orders->withPath('/orders/');

        $currentpage = $orders->currentPage();

        return view($this->opName. '.' . __FUNCTION__, compact('orders','currentpage'));

    }

    /**
     * View the first level of detail of an order
     *
     * @param Request $request
     * @return Application|\Illuminate\Contracts\View\Factory|View
     */
    public function details(Request $request)
    {
        request()->validate([
            'ordernumber' =>  'required'
        ]);
        $client = new Client;
        try {
            $response = $client->get(env('BLUESKY_API_HOST').'/api/orders/search-by-order-number', [
                'connect_timeout' => 10,
                'query' => [
                    'ordernumber' => $request->ordernumber
                ]
            ]);
        } catch (ClientException $e) {
            if($e->getCode() == 400){
                $message = json_decode((string) $e->getResponse()->getBody(), true);
                $error = [
                    'message'   => $message['Message'],
                    'data'      => $message['Data']
                ];
                $currentpage = 1;
                return view($this->opName. '.' . __FUNCTION__, compact('error','currentpage'));
                }
        }
        $order_array = json_decode($response->getBody(), true);
        switch($order_array['currency_symbol']){
            case "GBP":
                $currencysymbol = "£";
                break;
            case "EURO":
                $currencysymbol = "€";
                break;
        }
        $order = collect($order_array);
        $currentpage = $request->currentpage;
        return view($this->opName. '.' . __FUNCTION__, compact('order','currencysymbol','currentpage'));
    }

    /**
     * Create pagination of results
     *
     * @param $items
     * @param int $perPage
     * @param null $page
     * @param array $options
     * @return LengthAwarePaginator
     */
    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
