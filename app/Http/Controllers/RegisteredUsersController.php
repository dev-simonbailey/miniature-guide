<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\View\Factory;
use Illuminate\View\View;

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
     * Show the user list page.
     *
     * @return Factory|View
     */
    public function show()
    {
        $usersData = User::withTrashed()->get()->sortByDesc("name");
        return view('users.show', compact('usersData'));
    }

    /**
     * Show the add user page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|View
     */
    public function add()
    {
        $roles = Role::all()->sortBy("name");
        return view('users.add', compact('roles'));
    }

    /**
     * Show the edit user page
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|View
     */
    public function edit($id)
    {
        $selectedUser = User::withTrashed()->findorfail($id);
        $roles = Role::all()->sortBy("name");
        return view('users.edit', compact('selectedUser', 'roles'));
    }

    /**
     * Update the user and return them to the user list page
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'department' => 'required',
            'role' => 'required',
            'home' => 'required'
        ]);
        $user->update($data);
        $user->assignRolesByID(request()->role);
        return redirect()->route("users.show");
    }

    /**
     * Soft delete the user
     *
     * @param $id
     * @return Factory|View
     */
    public function deleteUser($id)
    {
        User::softDelete($id);
        return $this->show();
    }

    /**
     * Restore a soft deleted user
     *
     * @param $id
     * @return Factory|View
     */
    public function restore($id)
    {
        User::softRestore($id);
        return $this->show();
    }

}
