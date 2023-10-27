<?php

namespace Database\Seeders;

use App\Models\AdminMenu;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();
        DB::table('role_has_permissions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Role::insert([
            [
                'id' => 1,
                'name' => 'Super Admin',
                'description' => 'Super Admin Permissions',
                'range' => '1,131,2,228,22,88,68,226,129,227,130,15,23,24,11,19,145',
                'used_for' => 'backend',
                'guard_name' => 'admin',
                'deleted_at' => NULL,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'id' => 2,
                'name' => 'Administrator',
                'description' => 'Administrator Permissions',
                'range' => '1,131,2,228,22,23,24,11,19,145',
                'used_for' => 'backend',
                'guard_name' => 'admin',
                'deleted_at' => NULL,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'id' => 3,
                'name' => 'Editor',
                'description' => 'Editor Permissions',
                'range' => '1,131,2,228,22,145',
                'used_for' => 'backend',
                'guard_name' => 'admin',
                'deleted_at' => NULL,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'id' => 4,
                'name' => 'Publisher',
                'description' => 'Publisher Permissions',
                'range' => '1,131,2,22,88,68,226,129,130,15,23,24,11,19,145',
                'used_for' => 'backend',
                'guard_name' => 'admin',
                'deleted_at' => NULL,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'id' => 5,
                'name' => 'User',
                'description' => 'User Permissions',
                'range' => NULL,
                'used_for' => 'frontend',
                'guard_name' => 'web',
                'deleted_at' => NULL,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
        ]);
        $roles = Role::all();
        foreach ($roles as $role) {
            if ($role->range !== '') {
                $menu_ids = explode(',', $role->range);
                $menus = AdminMenu::whereHas('permission')->whereIn('id', $menu_ids)->with(['permission'])->get();
                // print_r($menus->pluck('permission.id')->toArray());
                $role->givePermissionTo($menus->pluck('permission.id')->toArray());
            }
        }
    }
}
