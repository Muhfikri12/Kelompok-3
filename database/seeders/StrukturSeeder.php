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
                "name" => "Sekertaris Desa",
                "type" => "sekertaris",
                "staff_id" => 2,
                "parent_id" => 1,
            ],
            // Kaur
            [
                "name" => "Kaur Keuangan",
                "type" => "kaur",
                "staff_id" => 3,
                "parent_id" => 2,
            ],
            [
                "name" => "Kaur TU & UMUM",
                "type" => "kaur",
                "staff_id" => 4,
                "parent_id" => 2,
            ],
            [
                "name" => "Kaur Perencanaan",
                "type" => "kaur",
                "staff_id" => 5,
                "parent_id" => 2,
            ],
            // Kasi
            [
                "name" => "Kasi Pemerintahan",
                "type" => "kasi",
                "staff_id" => 6,
                "parent_id" => 1,
            ],
            [
                "name" => "Kasi Kejahteraan",
                "type" => "kasi",
                "staff_id" => 7,
                "parent_id" => 1,
            ],
            [
                "name" => "Kasi Pelayanan",
                "type" => "kasi",
                "staff_id" => 8,
                "parent_id" => 1,
            ],

            // Kadus

            [
                "name" => "Kadus Hegarmanah",
                "type" => "kadus",
                "staff_id" => 9,
                "parent_id" => 1,
            ],
            [
                "name" => "Kadus Pangkalan",
                "type" => "kadus",
                "staff_id" => 10,
                "parent_id" => 1,
            ],
            [
                "name" => "Kadus Ciparay",
                "type" => "kadus",
                "staff_id" => 11,
                "parent_id" => 1,
            ],

            [
                "name" => "Kadus Longkewang",
                "type" => "kadus",
                "staff_id" => 12,
                "parent_id" => 1,
            ],
            [
                "name" => "Kadus Nangerang",
                "type" => "kadus",
                "staff_id" => 13,
                "parent_id" => 1,
            ],
            [
                "name" => "Kadus Cilubang",
                "type" => "kadus",
                "staff_id" => 14,
                "parent_id" => 1,
            ],

            //
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
