<?php

namespace App\Http\Controllers;

use App\Orders;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
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
        $request = $client->request('GET', 'http://localhost:8080/api/authors');
        $response = $request->getBody();
        $authors = json_decode($response->getContents(),true);
        //dd($authors);
        //$orders = Orders::all()->sortByDesc("created_at");
        return view($this->opName. '.' . __FUNCTION__, compact('authors'));
    }

    /**
     * Get an order by ordernumber\
     *
     * @param $ordernumber
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|View
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show(Request $request)
    {
        $data = request()->validate([
            'ordernumber' =>  'required'
        ]);

        $client = new Client;
        try {
            $response = $client->get('http://localhost:8080/api/authors/id', [
                'connect_timeout' => 10,
                'query' => [
                    'id' => $request->ordernumber
                ]
            ]);
            $author = json_decode($response->getBody(), true);
            return view($this->opName. '.' . __FUNCTION__, compact('author'));
        } catch (ClientException $e) {
            if($e->getCode() == 400){
                $message = json_decode((string) $e->getResponse()->getBody(), true);
                $error = [
                    'message'   => $message['Message'],
                    'data'      => $message['Data']
                ];
                //dd($error);
                return view($this->opName. '.' . __FUNCTION__, compact('error'));
                }
        }
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
}
