<?php

namespace Database\Seeders;

use App\Models\Geografis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeografisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Geografis::create([
                "name" => "Desa Hegarmanah",
                "koordinat" => "6.927927, 106.819944",
                "luas" => "148,37 Km",
                "utara" => "Desa Tenjojaya",
                "selatan" => "Desa Cicantayan",
                "timur" => "Desa Karangtengah",
                "barat" => "Desa Bojong",
                "description" => "Hegarmanah merupakan sebuah desa yang terletak dalam (daerah) kecamatan Cicantayan, Kabupaten Sukabumi, Provinsi Jawa Barat, Indonesia.",
            ]);
    }
}
