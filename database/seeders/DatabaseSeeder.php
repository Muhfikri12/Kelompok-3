<?php

namespace Database\Seeders;

use App\Models\Demografi;
use App\Models\InformasiPublik;
use App\Models\StructureOrg;
use App\User;
use Database\Seeders\VisiMisiSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DemografiSeeder::class);
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        // StructureOrg::create([
        //     "name" => 'Kepala Desa',
        //     "staff_id" => NULL
        // ]);
        $this->call(DemografiSeeder::class);
        $this->call(PerangkatDesaSeeder::class);
        $this->call(GeografisSeeder::class);
        $this->call(StrukturSeeder::class);
        $this->call(LembagaSeeder::class);
        $this->call(CategoryArticle::class);
        $this->call(ArticleSeeder::class);
        $this->call(ProfileDesa::class);

        $this->call(InformasiSeeder::class);
        $this->call(BannerSeeder::class);
    }
}
