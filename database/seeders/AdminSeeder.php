<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username' => 'teknikinformatika',
            'password' => bcrypt('password'),
        ]);
        DB::table('admins')->insert([
            'username' => 'teknikelektronika',
            'password' => bcrypt('password'),
        ]);
        DB::table('admins')->insert([
            'username' => 'teknikmekatronika',
            'password' => bcrypt('password'),
        ]);
        DB::table('admins')->insert([
            'username' => 'teknikmmb',
            'password' => bcrypt('password'),
        ]);
        DB::table('admins')->insert([
            'username' => 'teknikspe',
            'password' => bcrypt('password'),
        ]);
        DB::table('admins')->insert([
            'username' => 'teknikgame',
            'password' => bcrypt('password'),
        ]);
        DB::table('admins')->insert([
            'username' => 'teknikelektroinsudtri',
            'password' => bcrypt('password'),
        ]);
        DB::table('admins')->insert([
            'username' => 'teknikkomputer',
            'password' => bcrypt('password'),
        ]);
        DB::table('admins')->insert([
            'username' => 'tekniktelekomunikasi',
            'password' => bcrypt('password'),
        ]);
    }
}
