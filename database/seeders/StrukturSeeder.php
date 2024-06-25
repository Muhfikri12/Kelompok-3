<?php

namespace Database\Seeders;

use App\Models\StructureOrg;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            // Kades
            [
                "name" => "Kepala Desa",
                "type" => "kades",
                "staff_id" => 1,
                "parent_id" => NULL,
            ],
            // Sekertaris
            [
                "name" => "Sekertaris",
                "type" => "sekertaris",
                "staff_id" => 2,
                "parent_id" => 1,
            ],
            // Kaur
            [
                "name" => "Kepala Urusan Negara",
                "type" => "kaur",
                "staff_id" => 3,
                "parent_id" => 2,
            ],
            [
                "name" => "Kepala Urusan Perencanaan",
                "type" => "kaur",
                "staff_id" => 4,
                "parent_id" => 2,
            ],
            [
                "name" => "Kepala Urusan Umum dan Tata Usaha",
                "type" => "kaur",
                "staff_id" => 5,
                "parent_id" => 2,
            ],
            // Kasi
            [
                "name" => "Kepala Seksi Pemerintahan",
                "type" => "kasi",
                "staff_id" => 6,
                "parent_id" => 1,
            ],
            [
                "name" => "Kepala Seksi Kesejahteraan",
                "type" => "kasi",
                "staff_id" => 7,
                "parent_id" => 1,
            ],
            [
                "name" => "Kepala Seksi Pelayanan",
                "type" => "kasi",
                "staff_id" => 8,
                "parent_id" => 1,
            ],
            // Staff
            // [
            //     "name" => "Staf Pemerintahan",
            //     "type" => "staf",
            //     "staff_id" => 9,
            //     "parent_id" => 6,
            // ],
            // [
            //     "name" => "Staf Kesejahteraan",
            //     "type" => "staf",
            //     "staff_id" => 7,
            //     "parent_id" => 7,
            // ],
            // [
            //     "name" => "Staf Pelayanan",
            //     "type" => "staf",
            //     "staff_id" => 11,
            //     "parent_id" => 8,
            // ],
        ];

        foreach ($arr as $value) {
            $record = StructureOrg::firstOrNew([
                "name" => $value['name'],
                "type" => $value['type'],
                "staff_id" => $value['staff_id'],
            ]);
            $record->parent_id = $value['parent_id'];
            $record->save();
        }
    }
}
