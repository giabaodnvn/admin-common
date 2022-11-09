<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();
        \DB::table('categories')->insert(array(
            0 =>
            array(
                'id' => 1,
                'parent_id' => NULL,
                'status' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
        	1 =>
        	array(
        		'id' => 2,
        		'parent_id' => NULL,
                'status' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	),
        	2 =>
        	array(
        		'id' => 3,
        		'parent_id' => 2,
                'status' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	),        	
        	3 =>
        	array(
        		'id' => 4,
        		'parent_id' => 2,
                'status' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	),        	
        	4 =>
        	array(
        		'id' => 5,
        		'parent_id' => 2,
                'status' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	),        	
        	5 =>
        	array(
        		'id' => 6,
        		'parent_id' => 2,
                'status' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	),        	
        	6 =>
        	array(
        		'id' => 7,
        		'parent_id' => NULL,
                'status' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	),        	
        	7 =>
        	array(
        		'id' => 8,
        		'parent_id' => NULL,
                'status' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	),        	
        	8 =>
        	array(
        		'id' => 9,
        		'parent_id' => NULL,
                'status' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	)
        ));
    }
}
