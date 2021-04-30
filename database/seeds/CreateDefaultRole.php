<?php

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
        // admin role
        DB::table('roles')->insert([
            'role'          =>  'admin',
            'create'        =>  1,
            'read'          =>  1,
            'update'        =>  1,
            'destroy'       =>  1,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ]);

        // sales role
        DB::table('roles')->insert([
            'role'          =>  'sales',
            'create'        =>  1,
            'read'          =>  0,
            'update'        =>  0,
            'destroy'       =>  0,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ]);
    }
}
