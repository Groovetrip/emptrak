<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdminRole = Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Accountant']);
        Role::create(['name' => 'User']);

        Permission::create(['name' => 'edit employees']);

        $superAdminUser = User::where('email', env('SUPER_ADMIN_USER', 'alex@liingoeyewear.com'))->first();
        if (!is_null($superAdminUser)) $superAdminUser->assignRole($superAdminRole);
    }
}
