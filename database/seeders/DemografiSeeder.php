<?php

namespace Database\Seeders;

use App\Models\CategoryDemografi;
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
        $cat = [
            [
                "nama" => "Jenis Kelamin",
                "keterangan" => null,
            ],
            [
                "nama" => "Usia",
                "keterangan" => null,
            ],
            [
                "nama" => "Kesejahteraan",
                "keterangan" => null,
            ],
        ];

        foreach ($cat as $value) {
            $record = CategoryDemografi::firstOrNew([
                "nama" => $value['nama'],
            ]);
            $record->keterangan = $value['keterangan'];
            $record->save();
        }

        $array = [
            // Demografi Berdasarkan Jenis Kelamin
            [
                "tahun" => "2019",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Laki-laki",
                "total" => 4589,
            ],
            [
                "tahun" => "2019",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Perempuan",
                "total" => 5312,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Laki-laki",
                "total" => 4869,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Perempuan",
                "total" => 3830,
            ],

            [
                "tahun" => "2021",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Laki-laki",
                "total" => 5000,
            ],
            [
                "tahun" => "2021",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Perempuan",
                "total" => 5000,
            ],
            [
                "tahun" => "2022",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Laki-laki",
                "total" => 4869,
            ],
            [
                "tahun" => "2022",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Perempuan",
                "total" => 3830,
            ],
            [
                "tahun" => "2023",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Laki-laki",
                "total" => 3909,
            ],
            [
                "tahun" => "2023",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Perempuan",
                "total" => 5490,
            ],
            [
                "tahun" => "2024",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Laki-laki",
                "total" => 4869,
            ],
            [
                "tahun" => "2024",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Perempuan",
                "total" => 3830,
            ],
            // Demografi Berdsarkan Usia
            [
                "tahun" => "2021",
                "satuan" => "Orang",
                "kategori" => "Usia",
                "keterangan" => "0 – 17",
                "total" => 1123,
            ],
            [
                "tahun" => "2021",
                "satuan" => "Orang",
                "kategori" => "Usia",
                "keterangan" => "18 – 56",
                "total" => 3131,
            ],
            [
                "tahun" => "2021",
                "satuan" => "Orang",
                "kategori" => "Usia",
                "keterangan" => "56 Keatas",
                "total" => 1290,
            ],
            // Demografi Berdsarkan Kesejahteraan
            [
                "tahun" => "2021",
                "satuan" => "KK",
                "kategori" => "Kesejahteraan",
                "keterangan" => "Keluarga Pra Sejahtera",
                "total" => 1123,
            ],
            [
                "tahun" => "2021",
                "satuan" => "KK",
                "kategori" => "Kesejahteraan",
                "keterangan" => "Keluarga Sejahtera I",
                "total" => 556,
            ],
            [
                "tahun" => "2021",
                "satuan" => "KK",
                "kategori" => "Kesejahteraan",
                "keterangan" => "Keluarga Sejahtera II",
                "total" => 830,
            ],
            [
                "tahun" => "2021",
                "satuan" => "KK",
                "kategori" => "Kesejahteraan",
                "keterangan" => "Keluarga Sejahtera II",
                "total" => 830,
            ],
            [
                "tahun" => "2021",
                "satuan" => "KK",
                "kategori" => "Kesejahteraan",
                "keterangan" => "Keluarga Sejahtera III",
                "total" => 830,
            ],
        ];

        foreach ($array as $value) {
            $cat = CategoryDemografi::where('nama',$value['kategori'])->first();
            $record =  Demografi::firstOrNew([
                "tahun" => $value['tahun'],
                'kategori_id' => $cat->id,
                'keterangan' => $value['keterangan'],
            ]);
            $record->satuan = $value['satuan'];
            $record->total = $value['total'];
            $record->save();
        }
    }
}
