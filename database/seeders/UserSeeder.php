<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'type' => 'Admin',
            'password' => Hash::make('11112222'),
        ]);
        DB::table('users')->insert([
            'name' => 'Admin1',
            'email' => 'admin1@gmail.com',
            'type' => 'Admin',
            'password' => Hash::make('11112222'),
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'type' => 'User',
            'password' => Hash::make('11112222'),
        ]);
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user1@gmail.com',
            'type' => 'User',
            'password' => Hash::make('11112222'),
        ]);
    }
}
