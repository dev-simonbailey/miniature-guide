<?php

use Illuminate\Database\Seeder;

class CreateDefaultRoleUserPivot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles_user')->insert([
            'roles_id'    => 2,
            'user_id'    => 1
        ]);
    }
}
