<?php

namespace Database\Seeders;

use App\Models\Demografi;
use App\Models\StructureOrg;
use App\ProfileDesas;
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


        ProfileDesas::create([
            'content_misi' => 'Menjadikan Desa [Nama Desa] sebagai desa yang mandiri, maju, dan sejahtera dengan mengedepankan nilai-nilai kebersamaan, kearifan lokal, serta keberlanjutan lingkungan.',
            'content_visi' => '<h2><strong>Visi</strong></h2>

<p>Visi Desa Hegarmanah adalah membangun komunitas yang sejahtera, mandiri, dan berkelanjutan dengan mengedepankan nilai-nilai kebersamaan, keberlanjutan, dan kearifan lokal.</p>

<p><strong>Deskripsi Visi</strong></p>

<p>Desa Hegarmanah bercita-cita menjadi desa yang mampu memberikan kehidupan yang layak dan sejahtera bagi seluruh warganya. Kami bertekad untuk mencapai visi ini melalui beberapa aspek penting:</p>

<p><strong>1. Peningkatan Kesejahteraan Ekonomi</strong></p>

<p>Kami berusaha meningkatkan kesejahteraan ekonomi warga desa dengan mengembangkan sektor pertanian, peternakan, dan industri rumahan. Melalui pelatihan, penyuluhan, dan pemberdayaan masyarakat, kami ingin menciptakan peluang kerja dan sumber penghasilan yang stabil dan berkelanjutan.</p>

<p><strong>2. Pendidikan dan Keterampilan</strong></p>

<p>Kami percaya bahwa pendidikan adalah kunci untuk masa depan yang lebih baik. Oleh karena itu, kami fokus pada peningkatan kualitas pendidikan dan menyediakan pelatihan keterampilan bagi semua warga desa, terutama bagi generasi muda. Kami ingin memastikan bahwa setiap anak di Desa Hegarmanah mendapatkan pendidikan yang layak dan kesempatan untuk berkembang.</p>

<p><strong>3. Kelestarian Lingkungan</strong></p>

<p>Kami berkomitmen untuk menjaga kelestarian lingkungan desa kami. Dengan menerapkan praktik-praktik pertanian berkelanjutan, pengelolaan sumber daya alam yang bijaksana, dan menjaga kebersihan desa, kami berupaya menjaga alam agar tetap asri dan dapat dinikmati oleh generasi mendatang.</p>

<p><strong>4. Penguatan Kebudayaan dan Tradisi</strong></p>

<p>Kami menghargai dan melestarikan kebudayaan serta tradisi lokal yang telah diwariskan oleh leluhur kami. Melalui berbagai kegiatan budaya, upacara adat, dan seni tradisional, kami ingin memastikan bahwa identitas budaya Desa Hegarmanah tetap hidup dan berkembang.</p>

<p><strong>5. Kesehatan dan Kesejahteraan Sosial</strong></p>

<p>Kami berusaha menyediakan akses yang lebih baik terhadap layanan kesehatan dan meningkatkan kesejahteraan sosial warga desa. Dengan membangun fasilitas kesehatan yang memadai dan mengadakan program-program kesehatan masyarakat, kami ingin menciptakan lingkungan yang sehat dan sejahtera.</p>

<p>Dengan visi yang kuat dan komitmen yang tinggi, Desa Hegarmanah bergerak maju menuju masa depan yang lebih cerah, di mana setiap warganya dapat hidup dengan penuh kebahagiaan, kesejahteraan, dan harmoni.</p>',
            'alamat' => '<h2><strong>Lokasi</strong></h2>

<p>Desa Hegarmanah terletak di sebuah lembah yang indah di wilayah pegunungan, menawarkan pemandangan alam yang spektakuler dan suasana yang tenang. Berikut adalah deskripsi lengkap tentang lokasi Desa Hegarmanah: Aksesibilitas Desa ini dapat dicapai melalui jalan darat dengan akses yang cukup baik. Dari kota terdekat, perjalanan menuju desa membutuhkan waktu sekitar 2 jam dengan kendaraan pribadi atau transportasi umum. Jalan menuju desa menawarkan pemandangan yang menakjubkan, dengan hamparan sawah, kebun teh, dan pegunungan yang menghiasi sepanjang perjalanan. Kedekatan dengan Kota Besar Desa Hegarmanah terletak tidak jauh dari beberapa kota besar, seperti Bandung atau Yogyakarta, yang membuatnya menjadi destinasi wisata yang ideal bagi mereka yang ingin melarikan diri dari kesibukan kota. Meskipun berada di daerah pedesaan, akses ke fasilitas dan layanan di kota besar masih relatif mudah. Fasilitas Transportasi Transportasi menuju Desa Hegarmanah cukup beragam, mulai dari bus antar kota, angkutan desa, hingga ojek yang siap mengantar pengunjung hingga ke pintu desa. Jalan desa juga cukup memadai untuk dilalui kendaraan roda dua dan roda empat, meskipun beberapa bagian masih berupa jalan tanah yang memberikan kesan pedesaan yang autentik. Keindahan Alam Sekitar Desa Hegarmanah dikelilingi oleh keindahan alam yang memukau. Dari sawah yang hijau membentang, sungai yang mengalir jernih, hingga hutan yang rimbun, desa ini menawarkan pemandangan yang menenangkan jiwa. Lokasi yang strategis ini juga memungkinkan para pengunjung untuk menikmati berbagai kegiatan alam seperti trekking, bersepeda, dan fotografi alam. Dengan lokasi yang strategis dan keindahan alam yang luar biasa, Desa Hegarmanah adalah tempat yang sempurna untuk menikmati kehidupan pedesaan yang tenang dan damai, jauh dari hiruk pikuk kota besar.</p>',
            'about_us' => '<h2><strong>Siapa Kami</strong></h2>

<p>Desa Hegarmanah adalah komunitas yang berdiri di atas dasar kekeluargaan, kebersamaan, dan gotong royong. Kami adalah sekumpulan individu yang hidup berdampingan dalam harmoni dengan alam dan sesama. Penduduk kami terdiri dari berbagai lapisan masyarakat, mulai dari petani, pengrajin, pedagang, hingga pendidik yang semuanya memiliki satu tujuan yang sama: membangun desa yang sejahtera dan berkelanjutan.</p>

<p><strong>Nilai-Nilai Kami</strong></p>

<ul>
	<li><strong>Gotong Royong:</strong> Kami percaya bahwa dengan bekerja bersama-sama, semua tantangan dapat diatasi dan tujuan bersama dapat dicapai.</li>
	<li><strong>Keberlanjutan:</strong> Kami berkomitmen untuk menjaga dan melestarikan lingkungan sekitar demi masa depan yang lebih baik.</li>
	<li><strong>Kearifan Lokal:</strong> Kami menghargai dan melestarikan tradisi serta budaya yang telah diwariskan dari generasi ke generasi.</li>
</ul>

<p><strong>Kehidupan Sehari-Hari</strong></p>

<p>Setiap harinya, kami menjalani kehidupan yang sederhana namun penuh makna. Pagi hari dimulai dengan aktivitas bertani di sawah, menanam padi, atau merawat kebun. Pada sore hari, anak-anak belajar di sekolah atau bermain di lapangan desa, sementara para ibu menyiapkan hidangan lezat dengan bahan-bahan segar dari kebun. Kami juga sering mengadakan kegiatan bersama seperti arisan, gotong royong membersihkan desa, dan upacara adat.</p>

<p><strong>Komitmen Kami</strong></p>

<p>Kami berkomitmen untuk terus berkembang dan meningkatkan kualitas hidup seluruh warga desa. Dengan semangat kebersamaan dan inovasi, kami berupaya untuk memajukan sektor pertanian, meningkatkan pendidikan, serta menyediakan fasilitas kesehatan yang memadai. Kami juga terbuka terhadap wisatawan yang ingin belajar dan merasakan kehidupan pedesaan, serta berbagi pengalaman dan pengetahuan dengan kami.</p>

<p>Kami, masyarakat Desa Hegarmanah, adalah wajah dari Indonesia yang sejati: ramah, hangat, dan selalu terbuka bagi siapa saja yang ingin menjadi bagian dari keluarga besar kami.</p>
',
            'sejarah' => 'Desa [Nama Desa] didirikan pada tahun [tahun pendirian] oleh sekelompok keluarga yang berasal dari [asal-usul pendiri]. Mereka memilih lokasi ini karena kesuburan tanahnya dan akses air yang melimpah dari sungai [nama sungai]. Seiring berjalannya waktu, desa ini berkembang menjadi pusat pertanian dan perdagangan lokal, dengan penduduk yang bekerja sama membangun infrastruktur dasar seperti jalan dan irigasi. Tradisi dan adat istiadat yang dibawa oleh para pendiri tetap dilestarikan hingga kini, menjadikan Desa [Nama Desa] sebagai komunitas yang kaya akan budaya dan sejarah yang kuat.',
            'yt_link' => 'https://youtube.com/',
            'fb_link' => 'https://web.facebook.com/',
            'wa_link' => '838101877087',
            'ig_link' => 'https://www.instagram.com/'
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
    }
}
