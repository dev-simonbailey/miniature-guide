<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateDefaultUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'          => 'Simon Bailey',
            'email'         => 'simon@ribble.com',
            'username'      => 'SimonB',
            'department'    => 'IT',
            'home'          => '/',
            'password'      => Hash::make('the_wheels_on_the_bus'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ]);
    }
}
