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
                "kategori" => "Jenis Kelamin",
                "name" => "Laki-laki",
                "total" => 5000,
            ],
            [
                "kategori" => "Jenis Kelamin",
                "name" => "Perempuan",
                "total" => 5000,
            ],
            // Demografi Berdsarkan Usia
            [
                "kategori" => "Usia",
                "name" => "0 – 17",
                "total" => 1123,
            ],
            [
                "kategori" => "Usia",
                "name" => "18 – 56",
                "total" => 3131,
            ],
            [
                "kategori" => "Usia",
                "name" => "56 Keatas",
                "total" => 1290,
            ],
                 // Demografi Berdsarkan Kesejahteraan
                 [
                    "kategori" => "Kesejahteraan",
                    "name" => "Keluarga Pra Sejahtera",
                    "total" => 1123,
                ],
                [
                    "kategori" => "Kesejahteraan",
                    "name" => "Keluarga Sejahtera I",
                    "total" => 556,
                ],
                [
                    "kategori" => "Kesejahteraan",
                    "name" => "Keluarga Sejahtera II",
                    "total" => 830,
                ],
                [
                    "kategori" => "Kesejahteraan",
                    "name" => "Keluarga Sejahtera II",
                    "total" => 830,
                ],
                [
                    "kategori" => "Kesejahteraan",
                    "name" => "Keluarga Sejahtera III",
                    "total" => 830,
                ],
        ];

        foreach ($array as $value) {
           $record =  Demografi::firstOrNew([
                'kategori' => $value['kategori'],
                'name' => $value['name'],
            ]);
            $record->total = $value['total'];
            $record->save();
        }
    }
}
