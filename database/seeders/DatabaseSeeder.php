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

        Map::create([
            'name' => 'Tugu Malam 2',
            'titikUkur' =>'7°46\'59.7"S 110°22\'01.1"E',
            'link' =>'https://www.youtube.com/embed/vbc5wExw43k?si=LK4KS1X79DbAg9fp',
            'location' =>'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Kridsono',
            'titikUkur' =>'7°46\'59.7"S 110°22\'01.1"E',
            'link' =>'https://www.youtube.com/embed/sVS7em1AjM4?si=z0k5EwKBfIA9rKD_',
            'location' =>'assets/locationPointer.png'
        ]);
        Map::create([
            'name' => 'Code Sore 1a',
            'titikUkur' =>'7°47\'03.5"S 110°22\'12.3"E',
            'link' =>'https://www.youtube.com/embed/CwaWJ-kOF3A?si=LB3KpDq5l1h1-_y4',
            'location' =>'assets/locationPointer.png'
        ]);
        Map::create([
            'name' => 'Code Sebrang Romo Mangun 1b',
            'titikUkur' =>'7°47\'02"S 110°22\'14"E',
            'link' =>'https://www.youtube.com/embed/CwaWJ-kOF3A?si=LB3KpDq5l1h1-_y4',
            'location' =>'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Tarumartani 3',
            'titikUkur' => '7°47\'27"S 110°22\'53"E',
            'link' => 'https://www.youtube.com/embed/zBe_06P5xDU?si=L75noldjKmZ0aP7V',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Gramedia Kota Baru',
            'titikUkur' => '7°47\'01"S 110°22\'28"E',
            'link' => 'https://www.youtube.com/embed/mdlsXLqtVB8?si=BR5VGDcvavqjZ5q7',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Angkringan Code',
            'titikUkur' => '7°47\'21"S 110°22\'08"E',
            'link' => 'https://www.youtube.com/embed/TKwmCg1eG8Y?si=js7dgfWHg1CEFHCv',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Alun Alun Utara',
            'titikUkur' => '7°48\'10"S 110°21\'48"E',
            'link' => 'https://www.youtube.com/embed/FEKNGBVkpOM?si=4ZgbIExvosKYT3g4',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Kraton Bangsal Sri Manganti',
            'titikUkur' => '7°48\'25"S 110°21\'50"E',
            'link' => 'https://www.youtube.com/embed/amla13QayV4?si=016kyz6oQTw_nnjC',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Bunderan UGM',
            'titikUkur' => '7°46\'32"S 110°22\'34"E',
            'link' => 'https://www.youtube.com/embed/uC5Ioe7BWc8?si=JwSnhk7pUoC64Scj',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'MM UGM',
            'titikUkur' => '7°45\'56"S 110°22\'42"E',
            'link' => 'https://www.youtube.com/embed/KR1evNtWFQs?si=UXEBs1S5r9uvTlAw',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Pabrik SGM',
            'titikUkur' => '7°48\'07"S 110°23\'42"E',
            'link' => 'https://www.youtube.com/embed/nv0Kr4XiOsQ?si=OHHgO5j10-d83Rrm',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Pasar Kotagede',
            'titikUkur' => '7°49\'40"S 110°23\'59"E',
            'link' => 'https://www.youtube.com/embed/ruKNYQ-8W4k?si=9BNufj5OF6HG6Pok',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Gang Soka Kotagede',
            'titikUkur' => '7°49\'46"S 110°23\'46"E',
            'link' => 'https://www.youtube.com/embed/YRrTosrQOck?si=PGd7mMP4tF88w4CQ',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Makam Kotagede',
            'titikUkur' => '7°49\'46"S 110°23\'54"E',
            'link' => 'https://www.youtube.com/embed/C9Pe7yxjoes?si=rB99tLUr4nFy2Wra',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Masjid Kotagede 1',
            'titikUkur' => '7°49\'45.7"S 110°23\'53.4"E',
            'link' => 'https://www.youtube.com/embed/qWYZd3SOynI?si=4D2-Ywn4yXts2boH',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Masjid Kotagede 2',
            'titikUkur' => '7°49\'45.7"S 110°23\'53.4"E',
            'link' => 'https://www.youtube.com/embed/SdOB9RfF-Xo?si=PzCC3Ga_G93YneLF',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Masjid Kauman',
            'titikUkur' => '7°48\'14"S 110°21\'46"E',
            'link' => 'https://www.youtube.com/embed/CCrxQrpULSc?si=5qRQMRtUX5srIC7v',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Plengkung Gading',
            'titikUkur' => '7°48\'50"S 110°21\'45"E',
            'link' => 'https://www.youtube.com/embed/cF3WnPq-qi4?si=M2IJpWz2Sidy82MM',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Alun alun Selatan Sore',
            'titikUkur' => '7°48\'40"S 110°21\'47"E',
            'link' => 'https://www.youtube.com/embed/fiwiJoCgIgI?si=3Pjs6Zvk1xPnHTSt',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Pabrik MadukismoGaung',
            'titikUkur' => '7°49\'45"S 110°20\'43"E',
            'link' => 'https://www.youtube.com/embed/GmSJs3fNvJ4?si=68fZdf0j_DwZEQw',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'JNM Block',
            'titikUkur' => '7°47\'59"S 110°21\'13"E',
            'link' => 'https://www.youtube.com/embed/U5ojpVQrjXE?si=iYqaQFOZ_MS2foip',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Pandega Pogung',
            'titikUkur' => '7°45\'45"S 110°22\'30"E',
            'link' => 'https://www.youtube.com/embed/CJ6-g91bb1Q?si=xZaM21JwFpDzlz3g',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Mandala krida',
            'titikUkur' => '7°47\'46"S 110°22\'58"E',
            'link' => 'https://www.youtube.com/embed/LfW3KFsG5tw?si=lqRVJOV9b9soAiJI',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Ndalem Kaneman',
            'titikUkur' => '7°48\'37"S 110°21\'17"E',
            'link' => 'https://www.youtube.com/embed/7CAtkzkPOmc?si=pMK3LDUaWX-XPtpp',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Ndalem Pujokusuman 1',
            'titikUkur' => '7°48\'45.6"S 110°22\'16.2"E',
            'link' => 'https://www.youtube.com/embed/QxqItiyaUxU?si=Ln7YWGVl6TRYhXMO',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Ndalem Pujokusuman 2',
            'titikUkur' => '7°48\'45.6"S 110°22\'16.2"E',
            'link' => 'https://www.youtube.com/embed/MQd-Zh-4D3Q?si=CGeCvGLbjjXr9bfM',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Prawirotaman Siang',
            'titikUkur' => '7°49\'07"S 110°22\'05"E',
            'link' => 'https://www.youtube.com/embed/bL3egiVHPOo?si=KIUNmt-kE6rvIuWg',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Gembiraloka Weekdays 2',
            'titikUkur' => '7°48\'13"S 110°23\'53"E',
            'link' => 'https://www.youtube.com/embed/9UVEt9gH208?si=Mnbgr80f4Nkxjw_x',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Alun alun Selatan Pagi',
            'titikUkur' => '7°48\'40"S 110°21\'47"E',
            'link' => 'https://www.youtube.com/embed/DHhKW_VrcmU?si=hhtKMG8YAYlBCZh0',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Pasar Prawirotaman 2',
            'titikUkur' => '7°49\'11"S 110°22\'05"E',
            'link' => 'https://www.youtube.com/embed/9gxg7TiLPR4?si=0kUfzLZiW4JPFkDI',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Pasar Bringharjo 1 jl Malioboro',
            'titikUkur' => '7°47\'55"S 110°21\'54"E',
            'link' => 'https://www.youtube.com/embed/FdFaLnB7gOc?si=q3axFCMTjsAHj_Ti',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Pasar Bringharjo 2 dalam pasar, utara TBY',
            'titikUkur' => '7°47\'55"S 110°21\'59"E',
            'link' => 'https://www.youtube.com/embed/IFv6d9Q6Eg0?si=dnHAER5yydjclSk0',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Jalan Sekitar Tamansari',
            'titikUkur' => '7°48\'35.5"S 110°21\'32.3"E',
            'link' => 'https://www.youtube.com/embed/5X53hoo2gnw?si=z0yJjbooLEMittaI',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Pasar Kranggan',
            'titikUkur' => '7°46\'55"S 110°21\'56"E',
            'link' => 'https://www.youtube.com/embed/cvTR2aVwpSE?si=CXqTY6gUoioQwtAO',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Gang Kauman',
            'titikUkur' => '7°48\'05"S 110°21\'43"E',
            'link' => 'https://www.youtube.com/embed/elYrmrWU4dk?si=NPlauEJKFzCdpdER',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'XT Square',
            'titikUkur' => '7°48\'58"S 110°23\'10"E',
            'link' => 'https://www.youtube.com/embed/zK_NM3MtkU4?si=QRApY1RHfnc-Jvl0',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Gembiraloka Weekend',
            'titikUkur' => '7°48\'13"S 110°23\'53"E',
            'link' => 'https://www.youtube.com/embed/ZGwWQR0bVoo?si=D4Ac56EfLb-mUEDZ',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Prawirotaman Malam',
            'titikUkur' => '7°49\'07"S 110°22\'05"E',
            'link' => 'https://www.youtube.com/embed/cOzSJ-roVj0?si=N-i_BL-ER0GEw5Zk',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Pasar Ngasem',
            'titikUkur' => '7°48\'29"S 110°21\'36"E',
            'link' => 'https://www.youtube.com/embed/55kq6Yc2Tks?si=JErwpd0nDPjfVCN3',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Pasar Ngasem Luar',
            'titikUkur' => '7°48\'29"S 110°21\'36"E',
            'link' => 'https://www.youtube.com/embed/VFAcuqT1lDo?si=NfLiNB4p0e2fMyVy',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Alun-alun Utara Sisi Tikungan Tenggara',
            'titikUkur' => '7°48\'14.5"S 110°21\'56.6"E',
            'link' => 'https://www.youtube.com/embed/judXsse1Y_A?si=4yvdE3_PLWXMh14Y',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'SD Muhamaddiyah Sapen',
            'titikUkur' => '7°47\'11.2"S 110°23\'33.9"E',
            'link' => 'https://www.youtube.com/embed/9DDtd3GSuj4?si=FvF179DmLvV9MU41',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Kraton Bangsal Srimanganti',
            'titikUkur' => '7°48\'25"S 110°21\'49"E',
            'link' => 'https://www.youtube.com/embed/2sQ8lt0Kctw?si=_hpwX3zxRK0z_IWb',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Kraton Kamandungan Lor dan Bangsal Pancaniti',
            'titikUkur' => '7°48\'25"S 110°21\'49"E',
            'link' => 'https://www.youtube.com/embed/ZHapn0yoVjQ?si=y94YtnboZwq8SgAe',
            'location' => 'assets/locationPointer.png'
        ]);

        Map::create([
            'name' => 'Kampung Kauman',
            'titikUkur' => '7°48\'10.1"S 110°21\'44.0"E',
            'link' => 'https://www.youtube.com/embed/mGkc3QtF_aA?si=n-0wnqT_4iZu4LQI',
            'location' => 'assets/locationPointer.png'
        ]);
    }
}
