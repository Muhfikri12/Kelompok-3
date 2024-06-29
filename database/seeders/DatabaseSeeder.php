<?php

namespace Database\Seeders;

use App\Models\Demografi;
use App\Models\InformasiPublik;
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
            'content_misi' => '<h2><img alt="photo-desa" src="https://beritalima.com/wp-content/uploads/2023/11/IMG-20231129-WA0022.jpg" style="height:346px;width:700px;" /></h2>

<h2> </h2>

<h2><strong>Misi</strong></h2>

<p>Misi Desa Hegarmanah adalah menciptakan lingkungan yang harmonis, berkelanjutan, dan sejahtera melalui pemberdayaan masyarakat, pelestarian budaya, dan inovasi dalam pembangunan desa.</p>

<p><strong>Deskripsi Misi</strong></p>

<p><strong>1. Pemberdayaan Ekonomi Masyarakat</strong></p>

<p>Kami berkomitmen untuk meningkatkan kesejahteraan ekonomi warga dengan:</p>

<ul>
	<li>Mengembangkan sektor pertanian organik dan peternakan yang berkelanjutan.</li>
	<li>Mendirikan koperasi desa untuk mendukung usaha kecil dan menengah.</li>
	<li>Memberikan pelatihan kewirausahaan dan keterampilan bagi warga desa.</li>
</ul>

<p><strong>2. Peningkatan Kualitas Pendidikan</strong></p>

<p>Kami percaya bahwa pendidikan adalah fondasi bagi kemajuan desa, oleh karena itu kami berfokus pada:</p>

<ul>
	<li>Meningkatkan sarana dan prasarana pendidikan di desa.</li>
	<li>Menyediakan program beasiswa untuk siswa berprestasi.</li>
	<li>Mengadakan pelatihan dan workshop untuk meningkatkan keterampilan warga.</li>
</ul>

<p><strong>3. Pelestarian Lingkungan</strong></p>

<p>Kami berusaha menjaga dan melestarikan lingkungan desa dengan:</p>

<ul>
	<li>Menerapkan praktik-praktik pertanian ramah lingkungan.</li>
	<li>Mengelola sampah dengan sistem pengolahan yang baik dan benar.</li>
	<li>Menggalakkan program reboisasi dan konservasi sumber daya alam.</li>
</ul>

<p><strong>4. Pelestarian dan Pengembangan Budaya Lokal</strong></p>

<p>Kami menghargai dan melestarikan kebudayaan serta tradisi lokal melalui:</p>

<ul>
	<li>Mengadakan festival budaya tahunan untuk memperkenalkan seni dan tradisi desa.</li>
	<li>Mendirikan sanggar seni dan budaya untuk melatih generasi muda.</li>
	<li>Mendokumentasikan dan mempromosikan sejarah serta cerita rakyat desa.</li>
</ul>

<p><strong>5. Peningkatan Layanan Kesehatan</strong></p>

<p>Kami berupaya menyediakan akses kesehatan yang memadai dengan:</p>

<ul>
	<li>Membangun puskesmas yang dilengkapi dengan fasilitas yang memadai.</li>
	<li>Mengadakan program kesehatan preventif seperti imunisasi dan pemeriksaan rutin.</li>
	<li>Melibatkan tenaga medis profesional untuk memberikan pelayanan kesehatan yang berkualitas.</li>
</ul>

<p><strong>6. Penguatan Infrastruktur Desa</strong></p>

<p>Kami bertekad untuk meningkatkan kualitas infrastruktur desa dengan:</p>

<ul>
	<li>Membangun dan memperbaiki jalan desa untuk memudahkan akses.</li>
	<li>Menyediakan sarana air bersih dan sanitasi yang baik.</li>
	<li>Mengembangkan fasilitas umum seperti taman bermain dan balai desa.</li>
</ul>

<p>Dengan menjalankan misi-misi ini, Desa Hegarmanah berupaya mencapai visi besarnya, yaitu menjadi desa yang harmonis, berkelanjutan, dan sejahtera. Melalui kerja sama dan partisipasi aktif seluruh warga, kami yakin dapat mewujudkan lingkungan yang lebih baik untuk semua.</p>',
            'content_visi' => '<h2><img alt="photo-desa" src="https://jurnalinspirasi.co.id/wp-content/uploads/2023/03/1678694994082-pilkades-desa-sukagalih-jonggol-2023.jpg" style="height:525px;width:700px;" /></h2>

<h2> </h2>

<h2><strong>Visi</strong></h2>

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

<p>Dengan visi yang kuat dan komitmen yang tinggi, Desa Hegarmanah bergerak maju menuju masa depan yang lebih cerah, di mana setiap warganya dapat hidup dengan penuh kebahagiaan, kesejahteraan, dan harmoni.</p>
',
            'sejarah' => '<h2><img alt="photo-desa" src="https://www.mkri.id/public/content/berita/header/berita_1638758466_8dcac4b6cdc77ad82460.jpg" style="height:329px;width:796px;" /></h2>

<h2> </h2>

<h2><strong>Sejarah</strong></h2>

<p>Desa Hegarmanah memiliki sejarah yang kaya dan panjang, mencerminkan perjalanan waktu dan perkembangan masyarakat yang tinggal di sini. Berikut adalah deskripsi lengkap tentang sejarah Desa Hegarmanah:</p>

<p><strong>Asal Usul dan Nama</strong></p>

<p>Nama "Hegarmanah" berasal dari kata "Hegar" yang berarti segar atau subur, dan "Manah" yang berarti hati atau jiwa. Nama ini mencerminkan kondisi alam desa yang subur dan jiwa masyarakatnya yang selalu segar dan penuh semangat. Menurut cerita turun-temurun, desa ini pertama kali didirikan oleh sekelompok petani yang mencari lahan subur untuk bercocok tanam dan akhirnya menetap di lembah yang kini dikenal sebagai Desa Hegarmanah.</p>

<p><strong>Perkembangan Awal</strong></p>

<p>Pada masa awal pendiriannya, Desa Hegarmanah hanya dihuni oleh beberapa keluarga petani. Mereka hidup sederhana, bergantung pada hasil pertanian dan sumber daya alam sekitar. Seiring waktu, jumlah penduduk bertambah seiring dengan kedatangan keluarga-keluarga baru yang tertarik dengan kesuburan tanah dan keindahan alam desa ini.</p>

<p><strong>Era Kolonial</strong></p>

<p>Selama era kolonial, Desa Hegarmanah mengalami perubahan signifikan. Pembangunan infrastruktur seperti jalan dan irigasi mulai diperkenalkan, meskipun masih sederhana. Kehadiran pemerintahan kolonial juga membawa pengaruh dalam sistem pertanian dan perdagangan desa, meskipun tidak selalu positif bagi kesejahteraan penduduk lokal.</p>

<p><strong>Kemerdekaan dan Modernisasi</strong></p>

<p>Setelah Indonesia merdeka, Desa Hegarmanah mulai mengalami perkembangan yang lebih pesat. Program pemerintah untuk pembangunan pedesaan membantu meningkatkan infrastruktur dan layanan dasar seperti pendidikan dan kesehatan. Penduduk desa juga mulai mengadopsi teknologi pertanian yang lebih modern, meningkatkan hasil panen dan kesejahteraan ekonomi.</p>

<p><strong>Masa Kini</strong></p>

<p>Saat ini, Desa Hegarmanah adalah komunitas yang berkembang dengan tetap mempertahankan nilai-nilai tradisional dan kearifan lokal. Meskipun telah mengalami modernisasi, desa ini tetap memegang teguh budaya dan tradisi yang telah diwariskan dari generasi ke generasi. Berbagai kegiatan budaya dan upacara adat masih rutin dilakukan, memperkuat ikatan sosial dan identitas komunitas.</p>

<p><strong>Warisan Budaya dan Sejarah</strong></p>

<p>Desa Hegarmanah memiliki beberapa situs bersejarah dan peninggalan budaya yang menjadi saksi bisu perjalanan panjang desa ini. Beberapa di antaranya adalah candi kecil, situs pemakaman leluhur, dan artefak-artefak yang ditemukan di sekitar desa. Warisan ini tidak hanya menjadi aset budaya, tetapi juga menjadi daya tarik bagi wisatawan yang tertarik dengan sejarah dan budaya lokal.</p>

<p>Dengan sejarah yang kaya dan perjalanan panjang yang penuh makna, Desa Hegarmanah terus melangkah maju sambil tetap menghargai dan melestarikan warisan leluhurnya. Sejarah ini menjadi fondasi kuat bagi masa depan desa yang lebih cerah dan sejahtera.</p>',
            'yt_link' => 'https://youtube.com/',
            'fb_link' => 'https://web.facebook.com/',
            'wa_link' => '838101877087',
            'ig_link' => 'https://www.instagram.com/',
            'alamat' => '<h2><strong>Lokasi</strong></h2>

<p>Desa Hegarmanah terletak di sebuah lembah yang indah di wilayah pegunungan, menawarkan pemandangan alam yang spektakuler dan suasana yang tenang. Berikut adalah deskripsi lengkap tentang lokasi Desa Hegarmanah:</p>

<p><strong>Geografi</strong></p>

<p>Desa Hegarmanah berada di ketinggian sekitar 700 meter di atas permukaan laut, dikelilingi oleh perbukitan hijau dan hutan tropis yang lebat. Lokasinya yang berada di lembah membuat desa ini memiliki iklim yang sejuk dan segar sepanjang tahun.</p>

<p><strong>Aksesibilitas</strong></p>

<p>Desa ini dapat dicapai melalui jalan darat dengan akses yang cukup baik. Dari kota terdekat, perjalanan menuju desa membutuhkan waktu sekitar 2 jam dengan kendaraan pribadi atau transportasi umum. Jalan menuju desa menawarkan pemandangan yang menakjubkan, dengan hamparan sawah, kebun teh, dan pegunungan yang menghiasi sepanjang perjalanan.</p>

<p><strong>Kedekatan dengan Kota Besar</strong></p>

<p>Desa Hegarmanah terletak tidak jauh dari beberapa kota besar, seperti Bandung atau Yogyakarta, yang membuatnya menjadi destinasi wisata yang ideal bagi mereka yang ingin melarikan diri dari kesibukan kota. Meskipun berada di daerah pedesaan, akses ke fasilitas dan layanan di kota besar masih relatif mudah.</p>

<p><strong>Fasilitas Transportasi</strong></p>

<p>Transportasi menuju Desa Hegarmanah cukup beragam, mulai dari bus antar kota, angkutan desa, hingga ojek yang siap mengantar pengunjung hingga ke pintu desa. Jalan desa juga cukup memadai untuk dilalui kendaraan roda dua dan roda empat, meskipun beberapa bagian masih berupa jalan tanah yang memberikan kesan pedesaan yang autentik.</p>

<p><strong>Keindahan Alam Sekitar</strong></p>

<p>Desa Hegarmanah dikelilingi oleh keindahan alam yang memukau. Dari sawah yang hijau membentang, sungai yang mengalir jernih, hingga hutan yang rimbun, desa ini menawarkan pemandangan yang menenangkan jiwa. Lokasi yang strategis ini juga memungkinkan para pengunjung untuk menikmati berbagai kegiatan alam seperti trekking, bersepeda, dan fotografi alam.</p>

<p>Dengan lokasi yang strategis dan keindahan alam yang luar biasa, Desa Hegarmanah adalah tempat yang sempurna untuk menikmati kehidupan pedesaan yang tenang dan damai, jauh dari hiruk pikuk kota besar.</p>',
            'about_us' => '<h2><img alt="photo-desa" src="https://api2.kemenparekraf.go.id/storage/app/uploads/public/620/b45/43c/620b4543c730c505627514.jpg" style="height:667px;width:1000px;" /></h2>

<h2> </h2>

<h2><strong>Siapa Kami</strong></h2>

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

<p>Kami, masyarakat Desa Hegarmanah, adalah wajah dari Indonesia yang sejati: ramah, hangat, dan selalu terbuka bagi siapa saja yang ingin menjadi bagian dari keluarga besar kami.</p>',
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

        $this->call(InformasiSeeder::class);
    }
}
