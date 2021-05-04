<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
     * @return Factory|View|array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $usersdata = User::all()->sortByDesc("name");

        return view('users.show', compact('usersdata'));

    }

    public function add()
    {
        //dd('add ya');
        //$roles = Roles::all()->sortByDesc("name");
        return view('users.add', compact('roles'));
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
