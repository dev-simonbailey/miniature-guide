<?php

namespace App\Http\Controllers;

Use Auth;
Use App\User;
Use App\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
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
     * @return Factory|View
     */
    public function index()
    {
        if(Auth::user()->role == "admin")
        {
            //$users = User::all()->except(Auth::id());
            $roles = Roles::all();

            //dd($roles);
            return view('roles.show', compact('roles'));
            //return view('roles.show');
        }
        else
        {
            return view('welcome');
        }
    }
}
