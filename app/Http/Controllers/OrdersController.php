<?php

namespace App\Http\Controllers;

use App\Orders;
use GuzzleHttp\Exception\ClientException;
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
     * @return Factory|View
     */
    public function index()
    {
        $client = new Client;
        $request = $client->request('GET', 'http://localhost:8080/api/orders');
        $response = $request->getBody();
        $orders_response = Collection::make(json_decode($response->getContents(),true));
        $orders = $this->paginate($orders_response,2);
        $orders->withPath('/orders/');
        $currentpage = $orders->currentPage();
        return view($this->opName. '.' . __FUNCTION__, compact('orders','currentpage'));
    }

    /**
     * Get an order by order number
     *
     * @param $ordernumber
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|View
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show(Request $request)
    {
        request()->validate([
            'ordernumber' =>  'required'
        ]);
        $client = new Client;
        try {
            $response = $client->get('http://localhost:8080/api/orders/search-by-order-number', [
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
                return view($this->opName. '.' . __FUNCTION__, compact('error'));
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
     * @return Factory|View
     */
    public function create()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function getstore()
    {
        return view('errors.403');
    }

    /**
     * @return Factory|View
     */
    public function store()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function edit()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function getupdate()
    {
        return view('errors.403');
    }

    /**
     * @return Factory|View
     */
    public function update()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function delete()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function getdestroy()
    {
        return view('errors.403');
    }

    /**
     * @return Factory|View
     */
    public function destroy()
    {
        return view('errors.200');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
