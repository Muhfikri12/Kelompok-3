<?php

namespace Database\Seeders;

use App\ProfileDesa;
use App\User;
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
        User::create([
            'name' => 'Super',
            'last_name' => 'Administrator',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        ProfileDesa::create([
            'content_misi' => 'Lorem ipsum',
            'content_visi' => 'Lorem ipsum',
            'alamat' => 'Lorem ipsum',
            'about_us' => 'Lorem ipsum',
            'sejarah' => 'Lorem ipsum',
            'icon_link' => 'Lorem ipsum',
            'yt_link' => 'Lorem ipsum',
            'fb_link' => 'Lorem ipsum',
            'wa_link' => 'Lorem ipsum',
            'ig_link' => 'Lorem ipsum'
        ]);
    }
}
