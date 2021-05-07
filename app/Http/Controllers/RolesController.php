<?php

namespace App\Http\Controllers;

use App\Permission;
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
        $permissions = Permission::all(); // All permissions

        $roles = Role::all()->sortBy("name");
        return view('roles.show', compact('roles','permissions'));
    }

    public function edit($role)
    {
        $role_details = Role::find($role);
        $permission_details = Role::find($role)->permissions;
        //dd($role_details);
        return view('roles.edit', compact('role_details','permission_details'));

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
        return view('roles.add');
    }

    public function store(Roles $role)
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

    }
}
