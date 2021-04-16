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
            $roles = Roles::all();
            return view('roles.show', compact('roles'));
        }
        else
        {
            return view('welcome');
        }
    }    public function edit($role)
    {
        //$this->authorize('update', $user->profile);

        $details = Roles::findOrFail($role);

        return view('roles.edit', compact('details'));
    }
    public function update(Roles $role)
    {

        //$this->authorize('update', $user->profile);

        $data = request()->validate([
            'role'      =>  'required',
            'index'     =>  'required',
            'create'    =>  'required',
            'store'     =>  'required',
            'show'      =>  'required',
            'edit'      =>  'required',
            'update'    =>  'required',
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
            'destroy'   =>  $data['destroy'],
        ]);

        return redirect()->route('roles.show');

    }

}
