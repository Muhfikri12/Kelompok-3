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
                "nama" => "Pendidikan",
                "keterangan" => null,
            ],
            [
                "nama" => "Pekerjaan",
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
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Laki-laki",
                "total" => 3272,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Jenis Kelamin",
                "keterangan" => "Perempuan",
                "total" => 1425,
            ],


            // Demografi Berdsarkan Usia
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Usia",
                "keterangan" => "12 – 17 Tahun",
                "total" => 251,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Usia",
                "keterangan" => "18 – 29 Tahun",
                "total" => 1962,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Usia",
                "keterangan" => "30 - 59 Tahun",
                "total" => 1967,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Usia",
                "keterangan" => "> 60 Tahun",
                "total" => 517,
            ],

            // Demografi Berdsarkan Pendidikan
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pendidikan",
                "keterangan" => "Tidak Tamat SD",
                "total" => 93,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pendidikan",
                "keterangan" => "Tamat SD",
                "total" => 3020,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pendidikan",
                "keterangan" => "Tamat SLTP",
                "total" => 845,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pendidikan",
                "keterangan" => "Tamat SLTA",
                "total" => 446,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pendidikan",
                "keterangan" => "D1",
                "total" => 23,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pendidikan",
                "keterangan" => "D2",
                "total" => 61,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pendidikan",
                "keterangan" => "D3",
                "total" => 32,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pendidikan",
                "keterangan" => "S1",
                "total" => 164
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pendidikan",
                "keterangan" => "S2",
                "total" => 9,
            ],

            // Demografi Berdsarkan Pekerjaan
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "PNS Umum",
                "total" => 3,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "PNS Guru",
                "total" => 13,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "Guru Honorer/GTY/GTT",
                "total" => 140,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "TNI",
                "total" => 9,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "POLRI",
                "total" => 3,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "Karyawan Swasta",
                "total" => 964,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "Wiraswasta/Pengrajin",
                "total" => 185,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "Pedagang",
                "total" => 130
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "Buruh Tani",
                "total" => 126,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "Ustandz",
                "total" => 30,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "Dokter",
                "total" => 1,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "Perawat",
                "total" => 4,
            ],
            [
                "tahun" => "2020",
                "satuan" => "Orang",
                "kategori" => "Pekerjaan",
                "keterangan" => "Bidan",
                "total" => 5,
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
