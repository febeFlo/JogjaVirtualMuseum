<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Map;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::create([
            'name' => 'Evan',
            'email' => 'evan@example.com',
            'password' => 'evan1234',
        ]);

        User::create([
            'name' => 'Fany',
            'email' => 'fany@example.com',
            'password' => 'fany1234',
        ]);

        Map::create([
            'link' => 'https://www.youtube.com/embed/mzv01MhsR8g?si=MqIn8UEpN_f4DlMp',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'link' => 'https://www.youtube.com/embed/c_C8W1rOjJA?si=pv3UwH-aXKStFCDd',
            'location' => 'assets/locationPointer.png'
        ]);
    }
}
