<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('role_has_permissions')->delete();
        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array(
        	0 => 
        		array(
        			'id' => 1,
        			'name' => 'dashboard',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        		),
        	1 =>
        	   array(
        			'id' => 2,
        			'name' => 'users.index',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	2 =>
        	   array(
        			'id' => 3,
        			'name' => 'users.create',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	3 =>
        	   array(
        			'id' => 4,
        			'name' => 'users.delete',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	4 =>
        	   array(
        			'id' => 5,
        			'name' => 'users.edit',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	5 =>
        	   array(
        			'id' => 6,
        			'name' => 'posts.index',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	6 =>
        	   array(
        			'id' => 7,
        			'name' => 'posts.create',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	7 =>
        	   array(
        			'id' => 8,
        			'name' => 'posts.delete',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	8 =>
        	   array(
        			'id' => 9,
        			'name' => 'posts.edit',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	9 =>
        	   array(
        			'id' => 10,
        			'name' => 'tags.index',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	10 =>
        	   array(
        			'id' => 11,
        			'name' => 'tags.create',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	11 =>
        	   array(
        			'id' => 12,
        			'name' => 'tags.delete',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	12 =>
        	   array(
        			'id' => 13,
        			'name' => 'tags.edit',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	13 =>
        	   array(
        			'id' => 14,
        			'name' => 'categories.index',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	14 =>
        	   array(
        			'id' => 15,
        			'name' => 'categories.create',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	15 =>
        	   array(
        			'id' => 16,
        			'name' => 'categories.delete',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	16 =>
        	   array(
        			'id' => 17,
        			'name' => 'categories.edit',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
            17 =>
        	   array(
        			'id' => 18,
        			'name' => 'roles.index',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	18 =>
        	   array(
        			'id' => 19,
        			'name' => 'roles.create',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	19 =>
        	   array(
        			'id' => 20,
        			'name' => 'roles.delete',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),
        	20 =>
        	   array(
        			'id' => 21,
        			'name' => 'roles.edit',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ), 
            21 =>
        	   array(
        			'id' => 22,
        			'name' => 'media.index',
        			'guard_name' => 'web',
        			'created_at' => \Carbon\Carbon::now(),
        			'updated_at' => \Carbon\Carbon::now()
        	   ),            
        ));
    }
}
