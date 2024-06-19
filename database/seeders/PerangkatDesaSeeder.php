<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use App\Models\Tugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerangkatDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $position = [
            [
                "name" => "Kepala Desa",
                "description" => null,
            ],
            [
                "name" => "Sekertaris Desa",
                "description" => null,
            ],
            [
                "name" => "Kepala Urusan Negara",
                "description" => null,
            ],
            [
                "name" => "Kepala Urusan Perencanaan",
                "description" => null,
            ],
            [
                "name" => "Kepala Urusan Umum dan Tata Usaha",
                "description" => null,
            ],
            [
                "name" => "Kepala Seksi Pemerintahan",
                "description" => null,
            ],
            [
                "name" => "Kepala Seksi Kesejahteraan",
                "description" => null,
            ],
            [
                "name" => "Kepala Seksi Pelayanan",
                "description" => null,
            ],
        ];


        foreach($position as $item) {
            $record = Jabatan::firstOrNew([
                "name" => $item['name']
            ]);
            $record->description = $item['description'];
            $record->save();
        }

        $task = [
            // Task Sekertaris Desa
            [
                "position" => "Sekertaris Desa",
                "name" => "Menyusun rencana kerja pemerintah desa",
                "description" => null,
            ],
            [
                "position" => "Sekertaris Desa",
                "name" => "Mengelola administrasi pemerintahan desa",
                "description" => null,
            ],
            [
                "position" => "Sekertaris Desa",
                "name" => "Mengelola keuangan dan aset desa",
                "description" => null,
            ],
            [
                "position" => "Sekertaris Desa",
                "name" => "Menyusun laporan penyelenggaraan pemerintahan desa",
                "description" => null,
            ],

            // Kepala Urusan Negara

            [
                "position" => "Kepala Urusan Negara",
                "name" => "Mengelola administrasi keuangan desa",
                "description" => null,
            ],
            [
                "position" => "Kepala Urusan Negara",
                "name" => "Menyusun anggaran pendapatan dan belanja desa",
                "description" => null,
            ],
            [
                "position" => "Kepala Urusan Negara",
                "name" => "Melaksanakan penatausahaan keuangan desa",
                "description" => null,
            ],
            [
                "position" => "Kepala Urusan Negara",
                "name" => "Menyusun laporan keuangan desa",
                "description" => null,
            ],

            // Kepala Urusan Perencanaan

            [
                "position"  => "Kepala Urusan Perencanaan",
                "name" => "Menyusun rencana pembangunan jangka menengah desa",
                "description" => null,
            ],
            [
                "position"  => "Kepala Urusan Perencanaan",
                "name" => "Menyusun rencana kerja pemerintah desa",
                "description" => null,
            ],
            [
                "position"  => "Kepala Urusan Perencanaan",
                "name" => "Melaksanakan pemantauan dan evaluasi kegiatan pembangunan desa",
                "description" => null,
            ],
            [
                "position"  => "Kepala Urusan Perencanaan",
                "name" => "Menyusun laporan pelaksanaan kegiatan pembangunan desa",
                "description" => null,
            ],


            //  Kepala Urusan Umum dan Tata Usaha

            [
                "position" => "Kepala Urusan Umum dan Tata Usaha",
                "name" => "Menyusun rencana pembangunan jangka menengah desa",
                "description" => null,
            ],
            [
                "position" => "Kepala Urusan Umum dan Tata Usaha",
                "name" => "Mengelola administrasi kepegawaian desa",
                "description" => null,
            ],
            [
                "position" => "Kepala Urusan Umum dan Tata Usaha",
                "name" => "Mengelola arsip dan dokumentasi desa",
                "description" => null,
            ],
            [
                "position" => "Kepala Urusan Umum dan Tata Usaha",
                "name" => "Menyusun laporan administrasi umum desa",
                "description" => null,
            ],

            // Kepala Seksi Pemerintahan

              [
                "position"  => "Kepala Seksi Pemerintahan",
                "name" => "Melaksanakan pelayanan administrasi kependudukan",
                "description" => null,
            ],
            [
                "position"  => "Kepala Seksi Pemerintahan",
                "name" => "Melaksanakan kegiatan pemeliharaan ketertiban dan keamanan",
                "description" => null,
            ],
            [
                "position"  => "Kepala Seksi Pemerintahan",
                "name" => "Menyusun laporan pelaksanaan kegiatan pemerintahan desa",
                "description" => null,
            ],
            [
                "position"  => "Kepala Seksi Pemerintahan",
                "name" => "Mengelola administrasi pertanahan desa",
                "description" => null,
            ],


            // Kepala Seksi Kesejahteraan

            [
                "position" => "Kepala Seksi Kesejahteraan",
                "name" => "Melaksanakan pelayanan di bidang kesehatan dan pendidikan",
                "description" => null,
            ],
            [
                "position" => "Kepala Seksi Kesejahteraan",
                "name" => "Melaksanakan kegiatan peningkatan kesejahteraan masyarakat",
                "description" => null,
            ],
            [
                "position" => "Kepala Seksi Kesejahteraan",
                "name" => "Menyusun laporan pelaksanaan kegiatan kesejahteraan masyarakat",
                "description" => null,
            ],
            [
                "position" => "Kepala Seksi Kesejahteraan",
                "name" => "Mengelola administrasi kesejahteraan sosial desa",
                "description" => null,
            ],

            // Kepala Seksi Pelayanan

            [
                "position"  => "Kepala Seksi Pelayanan",
                "name" => "Melaksanakan pelayanan administrasi umum",
                "description" => null,
            ],
            [
                "position"  => "Kepala Seksi Pelayanan",
                "name" => "Melaksanakan pelayanan perizinan desa",
                "description" => null,
            ],
            [
                "position"  => "Kepala Seksi Pelayanan",
                "name" => "Menyusun laporan pelaksanaan kegiatan pelayanan desa",
                "description" => null,
            ],
            [
                "position"  => "Kepala Seksi Pelayanan",
                "name" => "Mengelola administrasi pelayanan publik desa",
                "description" => null,
            ],
        ];

        foreach ($task as $value) {
            $position = Jabatan::where('name',$value['position'])->first();
            $record = Tugas::firstOrNew([
                "name" => $value['name'],
                "position_id" => $position->id
            ]);
            $record->description = $value['description'];
            $record->save();
        }
    }
}
