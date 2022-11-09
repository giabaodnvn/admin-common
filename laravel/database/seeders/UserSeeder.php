<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
            'name' => 'Super Admin',
            'email' => 'test.rooney@example.net',
            'password' => Hash::make('admin@1234'),
            'status' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
