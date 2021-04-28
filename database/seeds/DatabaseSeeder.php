<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateDefaultUser::class);

        $this->call(CreateDefaultRole::class);

        $this->call(CreateDefaultPermissions::class);

        $this->call(CreateDefaultPermissionRolePivot::class);

        $this->call(CreateDefaultRoleUserPivot::class);

    }
}
