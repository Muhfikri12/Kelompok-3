<?php

namespace Database\Seeders;

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
            'content_visi' => 'Misi Desa [Nama Desa] adalah untuk memberdayakan masyarakat melalui peningkatan keterampilan dan pengembangan usaha lokal, membangun infrastruktur yang berkelanjutan, serta memastikan akses yang adil terhadap pendidikan dan kesehatan. Kami berkomitmen untuk melestarikan adat dan budaya lokal, mengelola sumber daya alam dengan bijak, dan menerapkan tata kelola pemerintahan yang transparan dan partisipatif. Semua ini dilakukan dengan tujuan menciptakan desa yang mandiri, maju, dan sejahtera, yang menjunjung tinggi nilai-nilai kebersamaan dan keberlanjutan lingkungan.',
            'alamat' => 'Desa [Nama Desa] terletak di wilayah [Nama Kecamatan, Kabupaten Kota], provinsi [Nama Provinsi].Secara geografis, desa kami berada di koordinat [sebutkan koordinat atau letak geografis desa],yang memberikan kami pemandangan alam yang luar biasa dan iklim yang nyaman.',
            'about_us' => 'Desa [Nama Desa] adalah sebuah desa yang terletak di [Lokasi atau Kabupaten/Kota], yang terkenal dengan keindahan alamnya, budaya yang kaya, dan masyarakat yang ramah. Desa kami menawarkan pemandangan yang memukau dan kehidupan yang harmonis, menjadikannya tempat yang ideal untuk tinggal dan berkunjung',
            'sejarah' => 'Desa [Nama Desa] didirikan pada tahun [tahun pendirian] oleh sekelompok keluarga yang berasal dari [asal-usul pendiri]. Mereka memilih lokasi ini karena kesuburan tanahnya dan akses air yang melimpah dari sungai [nama sungai]. Seiring berjalannya waktu, desa ini berkembang menjadi pusat pertanian dan perdagangan lokal, dengan penduduk yang bekerja sama membangun infrastruktur dasar seperti jalan dan irigasi. Tradisi dan adat istiadat yang dibawa oleh para pendiri tetap dilestarikan hingga kini, menjadikan Desa [Nama Desa] sebagai komunitas yang kaya akan budaya dan sejarah yang kuat.',
            'yt_link' => '',
            'fb_link' => 'https://web.facebook.com/',
            'wa_link' => '838101877087',
            'ig_link' => 'https://www.instagram.com/'
        ]);
        $this->call(DemografiSeeder::class);
        $this->call(PerangkatDesaSeeder::class);
    }
}
