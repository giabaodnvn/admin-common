<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RoleHasPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('role_has_permissions')->delete();
        $permissions = Permission::all();
        foreach ($permissions as $permission) {
            \DB::table('role_has_permissions')->insert(array(
                array(
                    'permission_id' => $permission->id,
                    'role_id' => 1 // Admin
                ),
            ));
        };
        foreach ($permissions as $permission) {
            \DB::table('role_has_permissions')->insert(array(
                array(
                    'permission_id' => $permission->id,
                    'role_id' => 2 // Manager
                ),
            ));
        };
    }
}
