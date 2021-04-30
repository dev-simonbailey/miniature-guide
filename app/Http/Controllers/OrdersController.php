<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Http\Controllers\PermissionsController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OrdersController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->isAuth = new PermissionsController();
        $path = explode('\\', __CLASS__);
        $this->opName = strtolower(str_replace('Controller', '', array_pop($path)));
    }

    /**
     * @return Factory|View
     */
    public function index()
    {
        $role = $this-user_role; //User::find(Auth::User()->id)->getRoles->get(0)->role;
        if ($this->isAuth->CheckPermissions(__FUNCTION__)) {
            $orders = Orders::all()->sortByDesc("created_at");
            return view($this->opName . '.' . __FUNCTION__, compact('orders', 'role'));
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function show()
    {
        if ($this->isAuth->CheckPermissions(__FUNCTION__)) {
            dd('AUTHORISED');
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return void
     */
    public function create()
    {
        if ($this->isAuth->CheckPermissions(__FUNCTION__)) {
            dd('AUTHORISED');
        } else {
            return view('errors.403');
        }
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
        if ($this->isAuth->CheckPermissions(__FUNCTION__)) {
            dd('AUTHORISED');
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function edit()
    {
        if ($this->isAuth->CheckPermissions(__FUNCTION__)) {
            dd('AUTHORISED');
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function getupdate()
    {
        return view('errors.403');
    }

    /**
     * @return void
     */
    public function update()
    {
        if ($this->isAuth->CheckPermissions(__FUNCTION__)) {
            dd('AUTHORISED');
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function delete()
    {
        if ($this->isAuth->CheckPermissions('remove')) {
            dd('AUTHORISED');
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function getdestroy()
    {
        return view('errors.403');
    }

    /**
     * @return void
     */
    public function destroy()
    {
        if ($this->isAuth->CheckPermissions(__FUNCTION__)) {
            dd('AUTHORISED');
        } else {
            return view('errors.403');
        }
    }
}
