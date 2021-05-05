<?php

namespace App\Http\Controllers;

use App\Role;
use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Factory;
use Illuminate\View\View;

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
        $roles = Role::all();
        return view('roles.show', compact('roles'));
    }

    public function edit($role)
    {
        $details = Role::findOrFail($role);
        $permissions = $details->getRolePermissions;
        dd($permissions);
        return view('roles.edit', compact('details'));

    }

    public function update(Roles $role)
    {
            $data = request()->validate([
                'role'      =>  'required',
                'index'     =>  'required',
                'create'    =>  'required',
                'store'     =>  'required',
                'show'      =>  'required',
                'edit'      =>  'required',
                'update'    =>  'required',
                'remove'    =>  'required',
                'destroy'   =>  'required',
            ]);
            $role->update($data);
            return redirect()->route('roles.show');
    }

    public function add()
    {
        if (Auth::user()->role == "admin") {
            return view('roles.add');
        } else {
            return view('errors.403');
        }
    }

    public function store(Roles $role)
    {
        if (Auth::user()->role == "admin") {
            $data = request()->validate([
                'role'      =>  'required',
                'index'     =>  'required',
                'create'    =>  'required',
                'store'     =>  'required',
                'show'      =>  'required',
                'edit'      =>  'required',
                'update'    =>  'required',
                'remove'    =>  'required',
                'destroy'   =>  'required',
            ]);
            $role->create([
                'role'      =>  $data['role'],
                'index'     =>  $data['index'],
                'create'    =>  $data['create'],
                'store'     =>  $data['store'],
                'show'      =>  $data['show'],
                'edit'      =>  $data['edit'],
                'update'    =>  $data['update'],
                'remove'    =>  $data['remove'],
                'destroy'   =>  $data['destroy'],
            ]);
            return redirect()->route('roles.show');
        } else {
            return view('errors.403');
        }
    }
}
