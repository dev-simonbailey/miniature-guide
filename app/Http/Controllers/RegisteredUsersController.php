<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        //$this->middleware('role');
    }

    /**
     * Show the application dashboard.
     *
     * @return Factory|View
     */
    public function show() {
        $usersdata = User::all()->sortByDesc("name");
        return view('users.show', compact('usersdata'));
    }

    public function add()
    {
        $roles = Role::all()->sortBy("name");
        return view('users.add', compact('roles'));
    }

    public function edit(User $user)
    {
        $detail = User::findOrFail($user->id);
        $roles = Role::all()->sortBy("name");
        $usersroles = User::find($user->id)->roles;
        return view('users.edit', compact('detail','roles', 'usersroles'));
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
        return redirect()->route("users.show");
    }

    public function delete(User $user)
    {
        $details = User::findOrFail($user);
        return view('users.delete', compact('details'));
    }

    public function destroy(User $user)
    {
        $userToDelete = User::findOrFail($user->id);
        $userToDelete->delete();
        return redirect()->route("users.show");
    }
}
