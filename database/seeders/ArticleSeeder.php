<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $art = [
            [
                'title' => 'Makan Bersama',
                'content' => 'Akan di adakan Acara makan bersama di balai desa yang akan di laksdanakan oleh pemda cicantayan',
                "detail_content" => 'Acara makan bersama ini bukan hanya sekadar kegiatan sosial, tetapi juga memiliki tujuan yang lebih dalam. "Kami ingin meningkatkan kebersamaan dan kekompakan antarwarga Desa Hegarmana. Selain itu, acara ini juga merupakan kesempatan bagi warga untuk bertukar pikiran dan memberikan saran langsung kepada pemerintah daerah," ujar Bupati Cicantayan dalam sambutannya.

                Selain membangun hubungan yang lebih erat antara pemerintah daerah dan masyarakat, acara ini juga dimaksudkan untuk memperkenalkan program-program pemerintah yang akan datang serta mendengar langsung kebutuhan dan aspirasi warga.',
                'admin_id' => '1',
                'photo' => 'images/article_1.png',
                'place' => 'Ds. Hegarmanah, Kec. Cicantayan, Kab. Sukabumi, indonesia',
                'type' => 'pengumuman',
                'event_date' => '2023-8-8',
                'event_time' => '13:00'
            ],
            [
                'title' => 'Makan Bersama',
                'content' => 'Akan di adakan Acara makan bersama di balai desa yang akan di laksdanakan oleh pemda cicantayan',
                "detail_content" => 'Acara makan bersama ini bukan hanya sekadar kegiatan sosial, tetapi juga memiliki tujuan yang lebih dalam. "Kami ingin meningkatkan kebersamaan dan kekompakan antarwarga Desa Hegarmana. Selain itu, acara ini juga merupakan kesempatan bagi warga untuk bertukar pikiran dan memberikan saran langsung kepada pemerintah daerah," ujar Bupati Cicantayan dalam sambutannya.

                Selain membangun hubungan yang lebih erat antara pemerintah daerah dan masyarakat, acara ini juga dimaksudkan untuk memperkenalkan program-program pemerintah yang akan datang serta mendengar langsung kebutuhan dan aspirasi warga.',
                'admin_id' => '1',
                'photo' => 'images/article_1.png',
                'place' => 'Ds. Hegarmanah, Kec. Cicantayan, Kab. Sukabumi, indonesia',
                'type' => 'pengumuman',
                'event_date' => '2023-8-8',
                'event_time' => '13:00'
            ],
            [
                'title' => 'Makan Bersama',
                'content' => 'Akan di adakan Acara makan bersama di balai desa yang akan di laksdanakan oleh pemda cicantayan',
                "detail_content" => 'Acara makan bersama ini bukan hanya sekadar kegiatan sosial, tetapi juga memiliki tujuan yang lebih dalam. "Kami ingin meningkatkan kebersamaan dan kekompakan antarwarga Desa Hegarmana. Selain itu, acara ini juga merupakan kesempatan bagi warga untuk bertukar pikiran dan memberikan saran langsung kepada pemerintah daerah," ujar Bupati Cicantayan dalam sambutannya.
                Selain membangun hubungan yang lebih erat antara pemerintah daerah dan masyarakat, acara ini juga dimaksudkan untuk memperkenalkan program-program pemerintah yang akan datang serta mendengar langsung kebutuhan dan aspirasi warga.',
                'admin_id' => '1',
                'photo' => 'images/article_1.png',
                'place' => 'Ds. Hegarmanah, Kec. Cicantayan, Kab. Sukabumi, indonesia',
                'type' => 'pengumuman',
                'event_date' => '2023-8-8',
                'event_time' => '13:00'
            ],
            [
                'title' => 'Timnas Indonesia Menang Telak dalam Laga Persahabatan Melawan Vietnam',
                'content' => 'Dalam laga persahabatan yang berlangsung di Stadion Gelora Bung Karno tadi malam, Timnas Indonesia berhasil meraih kemenangan telak dengan skor 4-1 melawan Vietnam.',
                "detail_content" => 'Dalam laga persahabatan yang berlangsung di Stadion Gelora Bung Karno tadi malam, Timnas Indonesia berhasil meraih kemenangan telak dengan skor 4-1 melawan Vietnam. Gol-gol Indonesia dicetak oleh Febri Hariyadi, Egy Maulana, dan dua gol tambahan dari Irfan Jaya. Pelatih Shin Tae-yong memuji performa timnya yang bermain dengan semangat dan strategi yang matang. “Ini adalah hasil yang memuaskan, dan kami akan terus berlatih untuk menghadapi turnamen berikutnya,” ujar Shin Tae-yong dalam konferensi pers setelah pertandingan.',
                'photo' => 'images/article_2.png',
                'admin_id' => '1',
                'type' => 'berita',
                'kategori_id' => '2',

            ],
            [
                'title' => 'Teknologi VAR Diterapkan di Liga 1 untuk Meningkatkan Fair Play',
                'content' => 'Untuk pertama kalinya dalam sejarah Liga 1 Indonesia, teknologi Video Assistant Referee (VAR) akan digunakan mulai musim ini.',
                "detail_content" => 'Untuk pertama kalinya dalam sejarah Liga 1 Indonesia, teknologi Video Assistant Referee (VAR) akan digunakan mulai musim ini. Implementasi VAR ini diharapkan dapat meningkatkan keadilan dan transparansi dalam setiap pertandingan. Direktur Liga Indonesia Baru (LIB), Akhmad Hadian Lukita, menyatakan bahwa VAR akan membantu wasit dalam mengambil keputusan yang lebih tepat dan mengurangi kesalahan dalam pertandingan. Pelatihan untuk wasit dan teknisi telah dilakukan untuk memastikan penggunaan VAR yang efektif dan efisien.',
                'photo' => 'images/article_3.png',
                'admin_id' => '1',
                'type' => 'berita',
                'kategori_id' => '3',

            ],
            [
                'title' => 'Atlet Lari Nasional, Lalu Muhammad Zohri, Raih Medali Emas di Kejuaraan Asia',
                'content' => 'Lalu Muhammad Zohri, atlet lari kebanggaan Indonesia, berhasil meraih medali emas di nomor 100 meter putra pada Kejuaraan Atletik Asia yang berlangsung di Jepang.',
                "detail_content" => 'Lalu Muhammad Zohri, atlet lari kebanggaan Indonesia, berhasil meraih medali emas di nomor 100 meter putra pada Kejuaraan Atletik Asia yang berlangsung di Jepang. Dengan catatan waktu 10,03 detik, Zohri berhasil mengalahkan pesaingnya dari Jepang dan China. Zohri menyatakan kebahagiaannya dan dedikasi medali ini untuk seluruh rakyat Indonesia. "Ini adalah hasil dari kerja keras dan dukungan dari seluruh tim dan masyarakat Indonesia," ungkapnya.',
                'photo' => 'images/article_4.png',
                'admin_id' => '1',
                'type' => 'berita',
                'kategori_id' => '2',

            ],
            [
                'title' => 'Pentingnya Pemanasan Sebelum Olahraga untuk Mencegah Cedera',
                'content' => 'Pemanasan sebelum melakukan aktivitas olahraga sangat penting untuk mencegah cedera dan meningkatkan performa.',
                "detail_content" => 'Pemanasan sebelum melakukan aktivitas olahraga sangat penting untuk mencegah cedera dan meningkatkan performa. Menurut dr. Siska Putri, seorang fisioterapis, pemanasan yang tepat dapat meningkatkan aliran darah ke otot, meningkatkan fleksibilitas, dan mempersiapkan tubuh untuk aktivitas fisik yang lebih intens. “Melakukan pemanasan minimal 10-15 menit sebelum olahraga dapat mengurangi risiko cedera otot dan sendi,” kata dr. Siska. Ia juga menambahkan bahwa pendinginan setelah olahraga juga penting untuk membantu proses pemulihan otot.',
                'photo' => 'images/article_1.png',
                'admin_id' => '1',
                'type' => 'berita',
                'kategori_id' => '2',

            ],
        ];

        foreach ($art as $value) {
            $record = Article::create([
                "title" => $value['title'],
                "content" => $value['content'],
                "detail_content" => $value['detail_content'],
                "photo" => $value['photo'],
                "admin_id" => $value['admin_id'],
                "type" => $value['type'],
                "kategori_id" => $value['kategori_id'] ?? null,
                "place" => $value['place'] ?? null,
                "event_time" => $value['event_time'] ?? null,
                "event_date" => $value['event_date'] ?? null,
            ]);
            $record->save();
        }
    }
}
