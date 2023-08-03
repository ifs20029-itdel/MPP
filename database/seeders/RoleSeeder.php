<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a role
        $role = Role::create([
            'name' => 'super-admin',
        ]);
        // Create a permission
        $permission = Permission::create([
            'name' => 'manage-agency',
        ]);
        $role->givePermissionTo($permission);
        $permission = Permission::create([
            'name' => 'manage-news',
        ]);
        $role->givePermissionTo($permission);
        $permission = Permission::create([
            'name' => 'manage-critic',
        ]);
        $role->givePermissionTo($permission);

        // Create a user
        $user = \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        // Attach role to user
        $user->assignRole($role);


        // Create a permission
        $permission = Permission::create([
            'name' => 'show-agency',
        ]);
        $permission->assignRole($role);
        $permission = Permission::create([
            'name' => 'manage-agency-service',
        ]);
        $permission->assignRole($role);
        $permission = Permission::create([
            'name' => 'manage-agency-service-queue',
        ]);
        $permission->assignRole($role);
    }
}
