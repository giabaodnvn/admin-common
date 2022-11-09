<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();
        \DB::table('roles')->insert(array(
            0 => 
        	array(
        		'id' => 1,
        		'name' => 'admin',
        		'guard_name' => 'web',
                'description' => 'Highest role in system',
                'created_by' => 'System Admin',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now()
        	),
        	1 => array(
        		'id' => 2,
        		'name' => 'manager',
        		'guard_name' => 'web',
                'description' => 'Manager role',
                'created_by' => 'System Admin',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now()
			),
        ));
    }
}
