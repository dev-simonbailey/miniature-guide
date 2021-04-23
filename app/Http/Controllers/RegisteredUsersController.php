<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Roles;
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
    public function index()
    {
        if (Auth::user()->role == "admin") {
            //$users = User::all()->except(Auth::id());
            $users = User::all()->sortByDesc("name");
            return view('users.show', compact('users'));
        } else {
            return view('errors.403');
        }
    }

    public function add()
    {
        if (Auth::user()->role == "admin") {
            //$users = User::all()->except(Auth::id());
            $roles = Roles::all()->sortByDesc("name");
            return view('users.add', compact('roles'));
        } else {
            return view('errors.403');
        }
    }

    public function edit(User $user)
    {
        //$this->authorize('update', $user->profile);
        $detail = User::findOrFail($user->id);
        return view('users.edit', compact('detail'));
    }

    public function update(User $user)
    {
        //$this->authorize('update', $user->profile);
        if (Auth::user()->role == "admin") {
            $data = request()->validate([
                'name'          =>  'required',
                'username'      =>  'required',
                'email'         =>  'required|email',
                'department'    =>  'required',
                'department'    =>  'required',
                'role'          =>  'required',
                'home'          =>  'required'
            ]);
            $user->update($data);
            return redirect()->route("users.show");
        } else {
            return view('errors.403');
        }
    }

    public function delete(User $user)
    {
        //$this->authorize('update', $user->profile);
        if (Auth::user()->role == "admin") {
            $details = User::findOrFail($user);
            return view('users.delete', compact('details'));
        } else {
            return view('errors.403');
        }
    }

    public function destroy(User $user)
    {
        //$this->authorize('update', $user->profile);
        if (Auth::user()->role == "admin") {
            $userToDelete = User::findOrFail($user->id);
            $userToDelete->delete();
            return redirect()->route("users.show");
        } else {
            return view('errors.403');
        }
    }
}
