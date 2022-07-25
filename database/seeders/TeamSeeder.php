<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'user_id' => '1',
            'name' => explode(' ', 'Admin', 2)[0]."'s Team",
            'personal_team' => true,
        ]);
        DB::table('teams')->insert([
            'user_id' => '2',
            'name' => explode(' ', 'Admin1', 2)[0]."'s Team",
            'personal_team' => true,
        ]);
        DB::table('teams')->insert([
            'user_id' => '3',
            'name' => explode(' ', 'User', 2)[0]."'s Team",
            'personal_team' => true,
        ]);
        DB::table('teams')->insert([
            'user_id' => '4',
            'name' => explode(' ', 'User1', 2)[0]."'s Team",
            'personal_team' => true,
        ]);
    }
}
