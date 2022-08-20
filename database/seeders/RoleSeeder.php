<?php

namespace Database\Seeders;

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
        $roleAdmin = Role::create(['name' => 'Administrador']);
        $roleGuest = Role::create(['name' => 'Invitado']);

        Permission::create(['name' => 'dashboard'])->syncRoles([$roleAdmin, $roleGuest]);
        Permission::create(['name' => 'message'])->syncRoles([$roleAdmin, $roleGuest]);

        Permission::create(['name' => 'board'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'board/create'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'board/edit'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'board/destroy'])->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'user'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'user/create'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'user/edit'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'user/destroy'])->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'role'])->syncRoles([$roleAdmin]);
    }
}
