<?php

namespace Database\Seeders;

use App\Models\Lembaga;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     $faker = Faker::create();
    //     $type = ['BPD',"LPM","KARTA","PKK"];
        // for($i=0; $i<10; $i++) {
            Lembaga::create([
                "type" => "BPD",
                "name" => "BPD Hegarmanah",
                "leader" => "Andre Anggasih",
                "address" => "BPD Longkewang",
                "date" => "2000-01-01",
                "email" => "bpdlongkewang@gmail.com",
                "phone" => "089681558245",
            ]);
        // }
    }
}
