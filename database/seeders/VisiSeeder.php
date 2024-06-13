<?php

namespace Database\Seeders;

use App\Models\ProfileDesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfileDesa::create(
            [
                "content_visi" => 'Mewujudkan Desa Hegarmana yang maju, mandiri, dan sejahtera melalui pemberdayaan masyarakat berbasis teknologi informasi dan komunikasi.',
                'content_misi' => 'Misi website Desa Hegarmana adalah meningkatkan transparansi dan akuntabilitas dengan menyediakan sistem informasi yang mudah diakses oleh warga, memberdayakan masyarakat melalui pelatihan teknologi, mempermudah akses layanan administrasi desa secara online, mempromosikan potensi lokal dan produk unggulan desa, serta meningkatkan komunikasi antara pemerintah desa dan warga melalui informasi terkini dan kanal komunikasi yang terintegrasi.'     
            ]
        );
    }
}
