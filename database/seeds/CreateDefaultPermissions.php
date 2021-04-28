<?php

use Illuminate\Database\Seeder;

class CreateDefaultPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'roles_id'  =>  1,
            'create'    =>  1,
            'read'      =>  1,
            'update'    =>  1,
            'destroy'   =>  1,
        ]);
        DB::table('permissions')->insert([
            'roles_id'  =>  2,
            'create'    =>  0,
            'read'      =>  1,
            'update'    =>  0,
            'destroy'   =>  0,
        ]);

    }
}
