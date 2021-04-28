<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Roles;
use App\Permissions;

class WelcomeViewController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $userrole = Auth::user()->role;

        $rolepermissions = Roles::where('id', $userrole)->first();

        $permissions = Permissions::where('id',$rolepermissions->permissions_id)->first();

        dd($permissions);


            return view('welcome');


        dd('Nothing here');
    }
}
