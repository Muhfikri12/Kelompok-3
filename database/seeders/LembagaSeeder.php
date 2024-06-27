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
        $faker = Faker::create();


        $type = ['BPD',"LPM","KARTA","PKK"];
        for($i=0; $i<10; $i++) {
            Lembaga::create([
                "type" => $faker->randomElement($type),
                "name" => $faker->city,
                "leader" => $faker->name,
                "address" => $faker->address,
                "date" => $faker->date,
                "email" => $faker->unique()->safeEmail,
                "phone" => $faker->phoneNumber,
            ]);
        }
    }
}
