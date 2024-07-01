<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use App\Models\PerangkatDesa;
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
                "type" => "Kades",
                "description" => null,
            ],
            [
                "name" => "Sekertaris Desa",
                "type" => "Sekertaris",
                "description" => null,
            ],
            [
                "name" => "Kaur Keuangan",
                "type" => "Kaur",
                "description" => null,
            ],
            [
                "name" => "Kaur TU & UMUM",
                "type" => "Kaur",
                "description" => null,
            ],
            [
                "name" => "Kaur Perencanaan",
                "type" => "Kaur",
                "description" => null,
            ],
            [
                "name" => "Kasi Pemerintahan",
                "type" => "Kasi",
                "description" => null,
            ],
            [
                "name" => "Kasi Kejahteraan",
                "type" => "Kasi",
                "description" => null,
            ],
            [
                "name" => "Kasi Pelayanan",
                "type" => "Kasi",
                "description" => null,
            ],

            // [
            //     "name" => "Staff Pemerintahan",
            //     "type" => "Staf",
            //     "description" => null,
            // ],
            // [
            //     "name" => "Staff Pelayanan",
            //     "type" => "Staf",
            //     "description" => null,
            // ],
            // [
            //     "name" => "Staff Tata Usaha",
            //     "type" => "Staf",
            //     "description" => null,
            // ],
        ];


        foreach ($position as $item) {
            $record = Jabatan::firstOrNew([
                "name" => $item['name']
            ]);
            $record->type = $item['type'];
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

            // [
            //     "position" => "Kepala Urusan Negara",
            //     "name" => "Mengelola administrasi keuangan desa",
            //     "description" => null,
            // ],
            // [
            //     "position" => "Kepala Urusan Negara",
            //     "name" => "Menyusun anggaran pendapatan dan belanja desa",
            //     "description" => null,
            // ],
            // [
            //     "position" => "Kepala Urusan Negara",
            //     "name" => "Melaksanakan penatausahaan keuangan desa",
            //     "description" => null,
            // ],
            // [
            //     "position" => "Kepala Urusan Negara",
            //     "name" => "Menyusun laporan keuangan desa",
            //     "description" => null,
            // ],

            // Kaur Perencanaan

            [
                "position"  => "Kaur Perencanaan",
                "name" => "Menyusun rencana pembangunan jangka menengah desa",
                "description" => null,
            ],
            [
                "position"  => "Kaur Perencanaan",
                "name" => "Menyusun rencana kerja pemerintah desa",
                "description" => null,
            ],
            [
                "position"  => "Kaur Perencanaan",
                "name" => "Melaksanakan pemantauan dan evaluasi kegiatan pembangunan desa",
                "description" => null,
            ],
            [
                "position"  => "Kaur Perencanaan",
                "name" => "Menyusun laporan pelaksanaan kegiatan pembangunan desa",
                "description" => null,
            ],


            //  Kaur TU & UMUM

            [
                "position" => "Kaur TU & UMUM",
                "name" => "Menyusun rencana pembangunan jangka menengah desa",
                "description" => null,
            ],
            [
                "position" => "Kaur TU & UMUM",
                "name" => "Mengelola administrasi kepegawaian desa",
                "description" => null,
            ],
            [
                "position" => "Kaur TU & UMUM",
                "name" => "Mengelola arsip dan dokumentasi desa",
                "description" => null,
            ],
            [
                "position" => "Kaur TU & UMUM",
                "name" => "Menyusun laporan administrasi umum desa",
                "description" => null,
            ],

            // Kasi Pemerintahan

            [
                "position"  => "Kasi Pemerintahan",
                "name" => "Melaksanakan pelayanan administrasi kependudukan",
                "description" => null,
            ],
            [
                "position"  => "Kasi Pemerintahan",
                "name" => "Melaksanakan kegiatan pemeliharaan ketertiban dan keamanan",
                "description" => null,
            ],
            [
                "position"  => "Kasi Pemerintahan",
                "name" => "Menyusun laporan pelaksanaan kegiatan pemerintahan desa",
                "description" => null,
            ],
            [
                "position"  => "Kasi Pemerintahan",
                "name" => "Mengelola administrasi pertanahan desa",
                "description" => null,
            ],


            // Kasi Kejahteraan

            [
                "position" => "Kasi Kejahteraan",
                "name" => "Melaksanakan pelayanan di bidang kesehatan dan pendidikan",
                "description" => null,
            ],
            [
                "position" => "Kasi Kejahteraan",
                "name" => "Melaksanakan kegiatan peningkatan kesejahteraan masyarakat",
                "description" => null,
            ],
            [
                "position" => "Kasi Kejahteraan",
                "name" => "Menyusun laporan pelaksanaan kegiatan kesejahteraan masyarakat",
                "description" => null,
            ],
            [
                "position" => "Kasi Kejahteraan",
                "name" => "Mengelola administrasi kesejahteraan sosial desa",
                "description" => null,
            ],

            // Kasi Pelayanan

            [
                "position"  => "Kasi Pelayanan",
                "name" => "Melaksanakan pelayanan administrasi umum",
                "description" => null,
            ],
            [
                "position"  => "Kasi Pelayanan",
                "name" => "Melaksanakan pelayanan perizinan desa",
                "description" => null,
            ],
            [
                "position"  => "Kasi Pelayanan",
                "name" => "Menyusun laporan pelaksanaan kegiatan pelayanan desa",
                "description" => null,
            ],
            [
                "position"  => "Kasi Pelayanan",
                "name" => "Mengelola administrasi pelayanan publik desa",
                "description" => null,
            ],
        ];

        foreach ($task as $value) {
            $position = Jabatan::where('name', $value['position'])->first();
            $record = Tugas::firstOrNew([
                "name" => $value['name'],
                "position_id" => $position->id
            ]);
            $record->description = $value['description'];
            $record->save();
        }

        $perangkat = [
            [
                "name" => "Ujang Natadiredja,S.Pd.I",
                "phone" => '0895888888',
                "nip" => 1234223,
                "gender" => "Laki-laki",
                "position" => "Kepala Desa",
                "status" => "Aktif",
                "photo" => "ujang-natadiredja.png"
            ],
            [
                "name" => "Herlan Sutisna",
                "phone" => '0895888888',
                "nip" => 1234322,
                "gender" => "Laki-laki",
                "position" => "Sekertaris Desa",
                "status" => "Aktif",
                "photo" => "herlan.png"
            ],
            [
                "name" => "Siti Saiyah,S.IP",
                "phone" => '0895888888',
                "nip" => 1234322,
                "gender" => "Perempuan",
                "position" => "Kaur Keuangan",
                "status" => "Aktif",
                "photo" => "siti.png"
            ],
            [
                "name" => "Ade Nurhayati,AM.d",
                "phone" => '0895888888',
                "nip" => 1234322,
                "gender" => "Perempuan",
                "position" => "Kaur TU & UMUM",
                "status" => "Aktif",
                "photo" => "ade-nurhayati.png"
            ],
            [
                "name" => "Nurul Syahida,S.AP",
                "phone" => '0895888888',
                "nip" => 1234232,
                "gender" => "Perempuan",
                "position" => "Kaur Perencanaan",
                "status" => "Aktif",
                "photo" => "nurul-syahida.png"
            ],
            [
                "name" => "Agung Nugraha,S.I.P",
                "phone" => '0895888888',
                "nip" => 1234542,
                "gender" => "Laki-laki",
                "position" => "Kasi Pemerintahan ",
                "status" => "Aktif",
                "photo" => "agung.png"
            ],
            [
                "name" => "Masdi Mujib,SM",
                "phone" => '0895888888',
                "nip" => 1234342,
                "gender" => "Laki-laki",
                "position" => "Kasi Kejahteraan",
                "status" => "Aktif",
                "photo" => "masdi.png"
            ],
            [
                "name" => "Iyus Surahmat, AMd",
                "phone" => '0895888888',
                "nip" => 1234254,
                "gender" => "Laki-laki",
                "position" => "Kasi Pelayanan",
                "status" => "Aktif",
                "photo" => "iyus.png"
            ],


            // KADUS

        ];

        foreach ($perangkat as  $value) {
            $position = Jabatan::where('name', $value['position'])->first();
            // $record =  PerangkatDesa::firstOrNew([
            // ]);
            $record = new PerangkatDesa();
            $record->name = $value['name'];
            $record->phone = $value['phone'];
            $record->gender = $value['gender'];
            $record->position_id = $position->id;
            $record->name = $value['name'];
            $record->status = $value['status'];
            $record->nip = $value['nip'];
            $record->photo = $value['photo'];
            $record->save();
        }
    }
}
