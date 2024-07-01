<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                "judul" => "Selamat Hari Raya Idul Fitr",
                "description" => "Idul Fitri, juga dikenal sebagai Hari Raya Lebaran, adalah hari besar umat Islam yang dirayakan setelah sebulan penuh menjalankan ibadah puasa di bulan Ramadan. Idul Fitri jatuh pada tanggal 1 Syawal dalam kalender Hijriyah dan menjadi momen penting untuk merayakan kemenangan setelah berpuasa dan beribadah dengan tekun. ",
                "photo" => 'carousel-2.jpg'
            ],
            [
                "judul" => "Hari Kemerdekaan Indonesia",
                "description" => "Hari Kemerdekaan Indonesia, yang diperingati setiap tanggal 17 Agustus, adalah hari bersejarah bagi bangsa Indonesia yang menandai proklamasi kemerdekaan dari penjajahan pada tahun 1945. Pada tanggal 17 Agustus 2024, Indonesia akan merayakan ulang tahun kemerdekaan yang ke-79 dengan berbagai kegiatan dan upacara di seluruh negeri.",
                "photo" => 'carousel-3.jpg'
            ],
        ];

        foreach($arr as $value) {
            $record = Banner::firstOrNew([
                "judul" => $value['judul']
            ]);

            $record->description = $value['description'];
            $record->photo = $value['photo'];
            $record->save();

        }
    }
}
