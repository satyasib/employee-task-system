<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('password'),
            'profile' => 'user.avif'
        ]);

        $writer = User::create([
            'name'=>'writer',
            'email'=>'writer@writer.com',
            'password'=>bcrypt('password')
        ]);


        $admin_role = Role::create(['name' => 'admin']);
        $writer_role = Role::create(['name' => 'writer']);

        $permission = Permission::create(['name' => 'Post access','permission_slug' => 'post-access']);
        $permission = Permission::create(['name' => 'Post edit','permission_slug' => 'post-edit']);
        $permission = Permission::create(['name' => 'Post create','permission_slug' => 'post-create']);
        $permission = Permission::create(['name' => 'Post delete','permission_slug' => 'post-delete']);

        $permission = Permission::create(['name' => 'Role access','permission_slug' => 'role-access']);
        $permission = Permission::create(['name' => 'Role edit','permission_slug' => 'role-edit']);
        $permission = Permission::create(['name' => 'Role create','permission_slug' => 'role-create']);
        $permission = Permission::create(['name' => 'Role delete','permission_slug' => 'role-delete']);

        $permission = Permission::create(['name' => 'User access','permission_slug' => 'user-access']);
        $permission = Permission::create(['name' => 'User edit','permission_slug' => 'user-edit']);
        $permission = Permission::create(['name' => 'User create','permission_slug' => 'user-create']);
        $permission = Permission::create(['name' => 'User delete','permission_slug' => 'user-delete']);

        $permission = Permission::create(['name' => 'Permission access','permission_slug' => 'permission-access']);
        $permission = Permission::create(['name' => 'Permission edit','permission_slug' => 'permission-edit']);
        $permission = Permission::create(['name' => 'Permission create','permission_slug' => 'permission-create']);
        $permission = Permission::create(['name' => 'Permission delete','permission_slug' => 'permission-delete']);

        $permission = Permission::create(['name' => 'Mail access','permission_slug' => 'mail-access']);
        $permission = Permission::create(['name' => 'Mail edit','permission_slug' => 'mail-edit']);



        $admin->assignRole($admin_role);
        $writer->assignRole($writer_role);


        $admin_role->givePermissionTo(Permission::all());
    }
}
