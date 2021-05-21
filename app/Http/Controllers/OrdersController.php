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
use Illuminate\View\View;
use GuzzleHttp\Client;

/**
 * Controller for orders
 *
 * Class OrdersController
 *
 * @package App\Http\Controllers
 */
class OrdersController extends Controller
{

    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public $opName;

    public function __construct()
    {
        $pathToClass = explode('\\', __CLASS__);

        $this->opName = strtolower(str_replace('Controller', '', array_pop($pathToClass)));

    }

    /**
     * Show the orders search page
     *
     * @return Application|\Illuminate\Contracts\View\Factory|View
     */
    public function index()
    {
        /* TODO: LEAVING THIS IN FOR THE MOMENT IN CASE IT IS DECIDED TO SHOW LIST OF ORDERS INITIALLY
        $client = new Client;
        $request = $client->request('GET', env('BLUESKY_API_HOST') . '/api/orders');
        $response = $request->getBody();
        $ordersResponse = Collection::make(json_decode($response->getContents(), true));
        $orders = $this->paginate($ordersResponse, 2);
        $orders->withPath('/orders/');
        $currentPage = $orders->currentPage();
        return view($this->opName . '.' . __FUNCTION__, compact('orders', 'currentPage'));
        */
        return view($this->opName . '.' . __FUNCTION__);
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
            'orderNumber' => 'required'
        ]);
        $client = new Client;
        try {
            $response = $client->get(env('BLUESKY_API_HOST') . '/api/orders/search-by-order-number', [
                'connect_timeout' => 10,
                'query' => [
                    'orderNumber' => $request->orderNumber
                ]
            ]);
        } catch (ClientException $e) {
            if ($e->getCode() == 400) {
                $message = json_decode((string)$e->getResponse()->getBody(), true);
                $error = [
                    'message' => $message['Message'],
                    'data' => $message['Data']
                ];
                $currentPage = 1;
                return view($this->opName . '.' . __FUNCTION__, compact('error', 'currentPage'));
            }
        }
        $orderArray = json_decode($response->getBody(), true);
        switch ($orderArray['currency_symbol']) {
            case "GBP":
                $currencySymbol = "£";
                break;
            case "EURO":
                $currencySymbol = "€";
                break;
        }
        $order = collect($orderArray);
        $currentPage = $request->currentPage;
        return view($this->opName . '.' . __FUNCTION__, compact('order', 'currencySymbol', 'currentPage'));
    }

    /**
     * Convert status integers to real names
     * Status ID's - Remember to update ticket status colour below if you are editing this!
     *
     * @param $val
     * @return string
     */
    public function freshdesk_convert_status($val)
    {
        switch ($val) {
            case '2':
                $convertedStatus = 'open';
                break;
            case '3':
                $convertedStatus = 'Pending';
                break;
            case '4':
                $convertedStatus = 'Resolved';
                break;
            case '5':
                $convertedStatus = 'Closed';
                break;
            case '7':
                $convertedStatus = 'Waiting on Third Party - Internal';
                break;
            case '8':
                $convertedStatus = 'Customer Responded';
                break;
            case '9':
                $convertedStatus = 'Awaiting Callback';
                break;
            case '10':
                $convertedStatus = 'Waiting on Third Party - External';
                break;
            case '11':
                $convertedStatus = 'Chase up Third Party';
                break;
            default:
                $convertedStatus = $val;
                break;
        }
        return $convertedStatus;
    }

    /**
     * Set left border colour based on ticket status
     *
     * @param $val
     * @return string
     */
    public function freshdesk_ticket_status_colour($val)
    {
        switch ($val) {
            case '2':
                $convertedColor = 'leftOrange';
                break;
            case '3':
                $convertedColor = 'leftGreen';
                break;
            case '4':
                $convertedColor = 'leftGray';
                break;
            case '5':
                $convertedColor = 'leftGray';
                break;
            case '7':
                $convertedColor = 'leftGreen';
                break;
            case '8':
                $convertedColor = 'leftOrange';
                break;
            case '9':
                $convertedColor = 'leftOrange';
                break;
            case '10':
                $convertedColor = 'leftGreen';
                break;
            case '11':
                $convertedColor = 'leftOrange';
                break;
            default:
                $convertedColor = $val;
                break;
        }
        return $convertedColor;
    }


    /**
     * Convert group ID's to real name
     *
     * @param $val
     * @return string
     */
    function freshdesk_convert_group($val)
    {
        switch ($val) {
            case "22000164482":
                $convertedGroup = 'Accounts';
                break;
            case "22000163137":
                $convertedGroup = 'Bike Returns';
                break;
            case "22000162048":
                $convertedGroup = 'GDPR';
                break;
            case "22000164345":
                $convertedGroup = 'IT Support';
                break;
            case "22000159047":
                $convertedGroup = 'PAC Returns';
                break;
            case "22000163436":
                $convertedGroup = 'Sales';
                break;
            case "22000150665":
                $convertedGroup = 'Support';
                break;
            case "22000158531":
                $convertedGroup = 'Workshop';
                break;
            default:
                $convertGroup = $val;
                break;
        }
        return $converted;
    }


    /**
     * Convert Priority integers to real names
     *
     * @param $val
     * @return mixed
     */
    function freshdesk_convert_priority($val)
    {
        switch ($val) {
            case "1":
                $convertedPriority = 'Low';
                break;
            case "2":
                $convertedPriority = 'Medium';
                break;
            case "3":
                $convertedPriority = 'High';
                break;
            case "4":
                $convertedPriority = 'Urgent';
                break;
            default:
                $convertedPriority = $val;
                break;
        }
        return $converted;
    }

    /**
     * Get the Responders name from the id
     *
     * @param $val
     * @return mixed
     */
    function freshdesk_convert_responder_id($val)
    {
        try {
            $agent = Agent::where('responder_id', '=', $val)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $val;
        }
        return $agent->agent_name;
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
    /* TODO: LEAVING THIS IN, IN CASE WE USE A LIST ON THE INITIAL VIEW OF THE ORDERS
    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
    */
}
