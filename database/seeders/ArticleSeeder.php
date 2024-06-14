<?php

namespace Database\Seeders;

use App\Models\article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        article::create([
            'title' => 'Makan Bersama',
            'content' => 'Akan di adakan Acara makan bersama di balai desa yang akan di laksdanakan oleh pemda cicantayan',
            "detail_content" => 'Acara makan bersama ini bukan hanya sekadar kegiatan sosial, tetapi juga memiliki tujuan yang lebih dalam. "Kami ingin meningkatkan kebersamaan dan kekompakan antarwarga Desa Hegarmana. Selain itu, acara ini juga merupakan kesempatan bagi warga untuk bertukar pikiran dan memberikan saran langsung kepada pemerintah daerah," ujar Bupati Cicantayan dalam sambutannya.

                Selain membangun hubungan yang lebih erat antara pemerintah daerah dan masyarakat, acara ini juga dimaksudkan untuk memperkenalkan program-program pemerintah yang akan datang serta mendengar langsung kebutuhan dan aspirasi warga.',
            'admin_id' => '1',
            'place' => 'Ds. Hegarmanah, Kec. Cicantayan, Kab. Sukabumi, indonesia',
            'type' => 'pengumuman',
            'tanggal' => '2023-4-4'
        ]);
    }
}
