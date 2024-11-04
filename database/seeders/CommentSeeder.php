<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            'comment' => 'User comment 1',
            'user_id' => '2',
            'map_id' => '1'
        ]);

        DB::table('comments')->insert([
            'comment' => 'User comment 2',
            'user_id' => '2',
            'map_id' => '1'
        ]);

        DB::table('comments')->insert([
            'comment' => 'User comment 3',
            'user_id' => '3',
            'map_id' => '1'
        ]);

        DB::table('comments')->insert([
            'comment' => 'User comment 12',
            'user_id' => '2',
            'map_id' => '2'
        ]);

        DB::table('comments')->insert([
            'comment' => 'User comment 22',
            'user_id' => '3',
            'map_id' => '2'
        ]);

        DB::table('comments')->insert([
            'comment' => 'User comment 32',
            'user_id' => '2',
            'map_id' => '2'
        ]);
    }
}
