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
                "photo" => 'carousel-2.jpg',
                "status" => 'Aktif'
            ],
            [
                "judul" => "Hari Kemerdekaan Indonesia",
                "description" => "Hari Kemerdekaan Indonesia, yang diperingati setiap tanggal 17 Agustus, adalah hari bersejarah bagi bangsa Indonesia yang menandai proklamasi kemerdekaan dari penjajahan pada tahun 1945. Pada tanggal 17 Agustus 2024, Indonesia akan merayakan ulang tahun kemerdekaan yang ke-79 dengan berbagai kegiatan dan upacara di seluruh negeri.",
                "photo" => 'carousel-3.jpg',
                "status" => 'Aktif'
            ],
            [
                "judul" => "Selamat Hari Natal!",
                "description" => "Selamat Hari Natal! Semoga damai dan kebahagiaan Natal selalu menyertai kita semua. Di Hari yang penuh sukacita ini, mari kita berbagi kasih dan kebaikan kepada sesama, mengisi hati dengan harapan dan sukacita. Semoga kesehatan dan keberkahan selalu menyertai kita di tahun yang baru. Selamat merayakan Natal dengan penuh cinta dan kehangatan bersama keluarga dan teman-teman tercinta.",
                "photo" => 'natal.jpg',
                "status" => 'Aktif'
            ],
            [
                "judul" => "Selamat Hari Paskah!",
                "description" => "Selamat Hari Paskah! Di hari yang penuh makna ini, mari kita merayakan kebangkitan Kristus dengan penuh sukacita dan harapan. Semoga damai dan berkat-Nya senantiasa menghiasi hidup kita dan keluarga. Mari kita berbagi kasih dan kebaikan kepada sesama, menguatkan iman dan memperkokoh persaudaraan dalam cinta Kristus. Selamat merayakan Hari Paskah dengan sukacita dan kebahagiaan yang tiada tara.",
                "photo" => 'paskah.jpg',
                "status" => 'Aktif'
            ],
            [
                "judul" => "Selamat menjalankan ibadah puasa di bulan suci Ramadan!",
                "description" => "Selamat menjalankan ibadah puasa di bulan suci Ramadan! Semoga bulan yang penuh berkah ini membawa kedamaian, kebahagiaan, dan keberkahan bagi kita semua. Mari kita tingkatkan ibadah dan introspeksi diri, mendekatkan diri kepada Allah SWT, serta meningkatkan kebaikan dan kedermawanan kepada sesama. ",
                "photo" => 'ramadan.jpg',
                "status" => 'Aktif'
            ],
            // [
            //     "judul" => "Hari Kemerdekaan Indonesia",
            //     "description" => "Hari Kemerdekaan Indonesia, yang diperingati setiap tanggal 17 Agustus, adalah hari bersejarah bagi bangsa Indonesia yang menandai proklamasi kemerdekaan dari penjajahan pada tahun 1945. Pada tanggal 17 Agustus 2024, Indonesia akan merayakan ulang tahun kemerdekaan yang ke-79 dengan berbagai kegiatan dan upacara di seluruh negeri.",
            //     "photo" => 'carousel-3.jpg',
            //     "status" => 'Aktif'
            // ],

        ];

        foreach($arr as $value) {
            $record = Banner::firstOrNew([
                "judul" => $value['judul']
            ]);

            $record->description = $value['description'];
            $record->photo = $value['photo'];
            $record->type = $value['status'];
            $record->save();

        }
    }
}
