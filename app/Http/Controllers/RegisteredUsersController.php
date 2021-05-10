<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\View\Factory;
use Illuminate\View\View;

//use Illuminate\Http\Request;

class RegisteredUsersController extends Controller
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
    public function show() {
        $usersdata = User::withTrashed()->get()->sortByDesc("name");
        return view('users.show', compact('usersdata'));
    }

    public function add()
    {
        $roles = Role::all()->sortBy("name");
        return view('users.add', compact('roles'));
    }

    public function edit($id)
    {
        $selecteduser = User::withTrashed()->findorfail($id);
        $roles = Role::all()->sortBy("name");
        return view('users.edit', compact('selecteduser','roles'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name'          =>  'required',
            'username'      =>  'required',
            'email'         =>  'required|email',
            'department'    =>  'required',
            'role'          =>  'required',
            'home'          =>  'required'
        ]);
        $user->update($data);
        $user->assignRolesByID(request()->role);
        return redirect()->route("users.show");
    }

    public function deleteUser($id)
    {
        User::softDelete($id);
        return $this->show();
    }
    public function restore($id)
    {
        User::softRestore($id);
        return $this->show();
    }

}
