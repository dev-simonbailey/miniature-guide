<?php

namespace App\Http\Controllers;

use App\Comment;
use App\DeliveryAddress;
use App\FreshDesk;
use App\InvoiceAddress;
use App\LoadNoteComponent;
use App\LoadNoteHeader;
use App\LoadNoteLine;
use App\OrderLine;
use App\Payment;
use App\StockAllocation;
use App\TrackingCodes;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

//use Illuminate\Pagination\Paginator;
//use Illuminate\Support\Collection;
use Illuminate\View\View;
use GuzzleHttp\Client;

//use App\Http\Controllers\FreshDeskController as FreshDesk;

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
     * @return Application|Factory|View
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
     * @return Application|Factory|View
     */
    public function details(Request $request)
    {
        request()->validate([
            'orderNumber' => 'required'
        ]);
        $client = new Client();
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
            case 'GBP':
                $currencySymbol = '£';
                break;
            case 'EURO':
                $currencySymbol = '€';
                break;
        }
        $order = collect($orderArray);

        $currentPage = $request->currentPage;

        $freshDeskData = FreshDesk::getFreshDeskDataByEmail($orderArray['email']);

        $invoiceAddress = InvoiceAddress::getInvoiceDetails($orderArray['customer']);

        $deliveryAddress = DeliveryAddress::getDeliveryDetails($orderArray['customer']);

        $paymentData = Payment::getPaymentDetails($request->orderNumber);

        $orderLines = OrderLine::getOrderLines($request->orderNumber);

        $stockAllocations = StockAllocation::getStockAllocations($request->orderNumber);

        $comments = Comment::getComments($orderArray['customer']);

        if (!empty($stockAllocations)) {
            $tracking = TrackingCodes::getTrackingCodes($stockAllocations[0]['reference']);
        } else {
            $tracking = [];
        }
        $count = 0;

        $loadNoteHeader = [];
        foreach (LoadNoteHeader::getLoadNoteHeader($request->orderNumber) as $header) {
            $header['lines'] = LoadNoteLine::getLoadNoteLines($request->orderNumber);
            switch ($header['status']) {
                case 'Cancelled':
                    $header['color'] = 'leftRed';
                    break;
                case 'Complete':
                    $header['color'] = 'leftGreen';
                    break;
                default:
                    $header['color'] = 'leftBlue';
                    break;
            }
            foreach ($header['lines'] as $key => $line) {
                $header['lines'][$key]['items'] = LoadNoteComponent::getLoadNoteComponents($header['load_note'],
                    $line['line']);
            }
            array_push($loadNoteHeader, $header);
            $count++;
        }

        //dd($loadNoteHeader);

        return view($this->opName . '.' . __FUNCTION__, compact(
            'order',
            'currencySymbol',
            'currentPage',
            'freshDeskData',
            'invoiceAddress',
            'deliveryAddress',
            'paymentData',
            'orderLines',
            'stockAllocations',
            'comments',
            'tracking',
            'loadNoteHeader'));
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
