<?php

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class CreateDefaultRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'admin',
            'pdi_view',
            'pdi_edit',
            'pdi_delete',
            'reports'
        ];

        foreach ($permissions as $name) {
            $permission = new Permission();
            $permission->name = $name;
            $permission->label = ucwords(str_replace('_', ' ', $name));
            $permission->save();
        }

        $roles = [
            'admin',
            'sales',
            'mechanic',
            'pdi',
            'mechanic_manager'
        ];
        foreach ($roles as $name) {
            $role = new Role();
            $role->name = $name;
            $role->save();
        }

        Role::where('name', 'admin');
        $role->assignPermission(Permission::first());

        $user = User::first();
        $user->assignRole($role);
    }
}



