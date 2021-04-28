<?php

use Illuminate\Database\Seeder;

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
            'role'          => 'admin',
            'home'          => '/',
            'password'      => Hash::make('the_wheels_on_the_bus')
        ]);
    }
}
