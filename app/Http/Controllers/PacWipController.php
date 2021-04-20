<?php

namespace App\Http\Controllers;


Use App\Roles;
//Use App\Orders;
use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Http\Request;

class PacWipController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * @return Factory|View
     */
     public function index() {
        if($this->CheckPermissions(__FUNCTION__)){
            //$orders = Orders::all()->sortByDesc("created_at");
            //return view('ordersbypart.index', compact('orders'));
            dd('AUTHORISED');
        } else {
            dd('NOT AUTHORISED');
        }
     }
     public function create() {
        if($this->CheckPermissions(__FUNCTION__)){
            dd('AUTHORISED');
        } else {
            dd('NOT AUTHORISED');
        }
     }

     public function store() {
        if($this->CheckPermissions(__FUNCTION__)){
            dd('AUTHORISED');
        } else {
            dd('NOT AUTHORISED');
        }
     }

     public function show() {
        if($this->CheckPermissions(__FUNCTION__)){
            dd('AUTHORISED');
        } else {
            dd('NOT AUTHORISED');
        }
     }

     public function edit() {
        if($this->CheckPermissions(__FUNCTION__)){
            dd('AUTHORISED');
        } else {
            dd('NOT AUTHORISED');
        }
     }

     public function update() {
        if($this->CheckPermissions(__FUNCTION__)){
            dd('AUTHORISED');
        } else {
            dd('NOT AUTHORISED');
        }
     }

     public function destroy(){
        if($this->CheckPermissions(__FUNCTION__)){
            dd('AUTHORISED');
        } else {
            dd('NOT AUTHORISED');
        }
     }
     public function CheckPermissions($operation) {
        return Roles::where('role', Auth::user()->role)->pluck($operation)->first();
    }
}
