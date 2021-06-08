<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
        return view('welcome');
    }
}

