<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Fany',
            'email' => 'fany@example.com',
            'password' => 'fany1234'
        ]);

        DB::table('users')->insert([
            'name' => 'Evan',
            'email' => 'evan@example.com',
            'password' => 'evan1234',
        ]);
    }
}
