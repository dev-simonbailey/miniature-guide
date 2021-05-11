<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Factory;
use Illuminate\View\View;

class RolesController extends Controller
{

    public $permission_ids = [];
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

    public function update(Role $role, Request $request)
    {
        $data = request()->validate([
            'role'      =>  'required',
            'view'      =>  'required',
            'create'    =>  'required',
            'edit'      =>  'required',
            'delete'    =>  'required',
        ]);

        //$role = new Role();
        $role->name = str_replace(" ", "_", strtolower($data['role']));
        $role->label = $data['role'];

        $role->firstOrCreate(
            ['name' => $role->name],
            ['label' => $role->label]
        );

        if($request['view'] == 1) {
            $permission = Permission::create([
                'name'  => $role->name."_view",
                'label' => $role->label." View"
            ]);
            array_push($this->permission_ids, $permission->id);
        }

        if($request['create'] == 1) {
            $permission = Permission::create([
                'name'  => $role->name."_create",
                'label' => $role->label." Create"
            ]);
            array_push($this->permission_ids, $permission->id);
        }

        if($request['edit'] == 1) {
            $permission = Permission::create([
                'name'  => $role->name."_edit",
                'label' => $role->label." Edit"
            ]);
            array_push($this->permission_ids, $permission->id);
        }

        if($request['delete'] == 1) {
            $permission = Permission::create([
                'name'  => $role->name."_delete",
                'label' => $role->label." Delete"
            ]);
            array_push($this->permission_ids, $permission->id);
        }

        $role->assignPermissionsByID($this->permission_ids);

        return redirect()->route('roles.index');
    }

    public function add()
    {
        return view('roles.add');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'role'      =>  'required',
            'view'      =>  'required',
            'create'    =>  'required',
            'edit'      =>  'required',
            'delete'    =>  'required',
        ]);

        $role = new Role();
        $role->name = str_replace(" ", "_", strtolower($data['role']));
        $role->label = $data['role'];

        $role = Role::firstOrCreate(
            ['name' => $role->name],
            ['label' => $role->label]
        );

        if($request['view'] == 1) {
            $permission = Permission::create([
                'name'  => $role->name."_view",
                'label' => $role->label." View"
            ]);
            array_push($this->permission_ids, $permission->id);
        }

        if($request['create'] == 1) {
            $permission = Permission::create([
                'name'  => $role->name."_create",
                'label' => $role->label." Create"
            ]);
            array_push($this->permission_ids, $permission->id);
        }

        if($request['edit'] == 1) {
            $permission = Permission::create([
                'name'  => $role->name."_edit",
                'label' => $role->label." Edit"
            ]);
            array_push($this->permission_ids, $permission->id);
        }

        if($request['delete'] == 1) {
            $permission = Permission::create([
                'name'  => $role->name."_delete",
                'label' => $role->label." Delete"
            ]);
            array_push($this->permission_ids, $permission->id);
        }

        $role->assignPermissionsByID($this->permission_ids);

        return redirect()->route('roles.index');
    }
}
