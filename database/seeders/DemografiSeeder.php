<?php

namespace Database\Seeders;

use App\Models\Demografi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemografiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            // Demografi Berdasarkan Jenis Kelamin
            [
                "tahun" => "2019",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Laki-laki",
                "total" => 4589,
            ],
            [
                "tahun" => "2019",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Perempuan",
                "total" => 5312,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Laki-laki",
                "total" => 4869,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Perempuan",
                "total" => 3830,
            ],

            [
                "tahun" => "2021",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Laki-laki",
                "total" => 5000,
            ],
            [
                "tahun" => "2021",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Perempuan",
                "total" => 5000,
            ],
            [
                "tahun" => "2022",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Laki-laki",
                "total" => 4869,
            ],
            [
                "tahun" => "2022",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Perempuan",
                "total" => 3830,
            ],
            [
                "tahun" => "2023",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Laki-laki",
                "total" => 3909,
            ],
            [
                "tahun" => "2023",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Perempuan",
                "total" => 5490,
            ],
            [
                "tahun" => "2024",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Laki-laki",
                "total" => 4869,
            ],
            [
                "tahun" => "2024",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "name" => "Perempuan",
                "total" => 3830,
            ],
            // Demografi Berdsarkan Usia
            [
                "tahun" => "2021",
                "satuan" => "Orang",
                "kategori" => "Usia",
                "name" => "0 – 17",
                "total" => 1123,
            ],
            [
                "tahun" => "2021",
                "satuan" => "Orang",
                "kategori" => "Usia",
                "name" => "18 – 56",
                "total" => 3131,
            ],
            [
                "tahun" => "2021",
                "satuan" => "Orang",
                "kategori" => "Usia",
                "name" => "56 Keatas",
                "total" => 1290,
            ],
            // Demografi Berdsarkan Kesejahteraan
            [
                "tahun" => "2021",
                "satuan" => "KK",
                "kategori" => "Kesejahteraan",
                "name" => "Keluarga Pra Sejahtera",
                "total" => 1123,
            ],
            [
                "tahun" => "2021",
                "satuan" => "KK",
                "kategori" => "Kesejahteraan",
                "name" => "Keluarga Sejahtera I",
                "total" => 556,
            ],
            [
                "tahun" => "2021",
                "satuan" => "KK",
                "kategori" => "Kesejahteraan",
                "name" => "Keluarga Sejahtera II",
                "total" => 830,
            ],
            [
                "tahun" => "2021",
                "satuan" => "KK",
                "kategori" => "Kesejahteraan",
                "name" => "Keluarga Sejahtera II",
                "total" => 830,
            ],
            [
                "tahun" => "2021",
                "satuan" => "KK",
                "kategori" => "Kesejahteraan",
                "name" => "Keluarga Sejahtera III",
                "total" => 830,
            ],
        ];

        foreach ($array as $value) {
            $record =  Demografi::firstOrNew([
                "tahun" => $value['tahun'],
                'kategori' => $value['kategori'],
                'name' => $value['name'],
            ]);
            $record->satuan = $value['satuan'];
            $record->total = $value['total'];
            $record->save();
        }
    }
}
