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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Evan',
        //     'email' => 'evan@example.com',
        //     'password' => 'evan1234',
        // ]);

        // User::create([
        //     'name' => 'Fany',
        //     'email' => 'fany@example.com',
        //     'password' => 'fany1234',
        // ]);

        Map::create([
            'name' => 'Bawah Flyover Lempuyangan',
            'titikUkur' => '7°47\'22"S 110°22\'41"E',
            'link' => 'https://www.youtube.com/embed/mzv01MhsR8g?si=MqIn8UEpN_f4DlMp',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Tugu pada sore hari',
            'titikUkur' => '7°46\'59"S 110°22\'00"E',
            'link' => 'https://www.youtube.com/embed/c_C8W1rOjJA?si=pv3UwH-aXKStFCDd',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Stasiun Tugu',
            'titikUkur' => '7°47\'22"S 110°21\'57"E',
            'link' => 'https://www.youtube.com/embed/mzv01MhsR8g?si=MqIn8UEpN_f4DlMp',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Titik Nol',
            'titikUkur' => '7°48\'05.0"S 110°21\'53.8"E',
            'link' => 'https://www.youtube.com/embed/c_C8W1rOjJA?si=pv3UwH-aXKStFCDd',
            'location' => 'assets/locationPointer.png'
        ]);
    }
}
