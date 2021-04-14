<?php

namespace App\Http\Controllers;

Use Auth;
Use App\User;
use Illuminate\Http\Request;

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
        if(Auth::user()->role == "admin")
        {
            $users = User::all()->except(Auth::id());
            return view('users.show', compact('users'));
        }
        else
        {
            return view('welcome');
        }
    }
    public function edit(User $user)
    {
        //$this->authorize('update', $user->profile);

        $details = User::findOrFail($user);

        //dd($details);

        return view('users.edit', compact('details'));
    }

    public function update(User $user)
    {

        //$this->authorize('update', $user->profile);

        $data = request()->validate([
            'name'          =>  'required',
            'username'      =>  'required',
            'email'         =>  'required|email',
            'department'    =>  'required',
            'department'    =>  'required',
            'role'          =>  'required',
            'home'          =>  'required'
        ]);

        //dd($data);

        $user->update($data);

        return redirect("/users/show");
    }

    public function delete(User $user)
    {
        //$this->authorize('update', $user->profile);

        $details = User::findOrFail($user);

        return view('users.delete', compact('details'));
    }


    public function destroy(User $user)
    {
        //$this->authorize('update', $user->profile);

        $userToDelete = User::findOrFail($user->id);

        $userToDelete->delete();

        return redirect("/users/show");
    }

}
