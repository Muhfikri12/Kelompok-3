<?php

namespace Database\Seeders;

use App\Models\CategoriArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryArticle extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cat = [
            [
                "name" => "Olahraga",
            ],
            [
                "name" => "Teknologi",
            ],
            [
                "name" => "Kriminal",
            ],
            [
                "name" => "Politik",
            ],
            [
                "name" => "Ekonomi",
            ],
            [
                "name" => "Teknologi",
            ],
            [
                "name" => "Kesehatan",
            ],
            [
                "name" => "Hiburan",
            ],
            [
                "name" => "Sosial dan Budaya",
            ],
            [
                "name" => "Lain-Lain",
            ],
        ];

        foreach ($cat as $value) {
            $record = CategoriArticle::firstOrNew([
                "name" => $value['name'],
            ]);
            $record->save();
        }
    }
}
