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

        $type = ['BPD',"LPM","KARTA","PKK","DLL"];
        for($i=0; $i<10; $i++) {
            Lembaga::create([
                "name" => $faker->name,
                "leader" => $faker->name,
                "type" => $faker->randomElement($type),
                "address" => $faker->address,
                "date" => $faker->date,
                "email" => $faker->unique()->safeEmail,
                "phone" => $faker->phoneNumber,
            ]);
        }
    }
}
