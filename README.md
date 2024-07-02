# Cara Mengkloning dan Menyiapkan Proyek
Mengetahui cara mengkloning dan menyiapkan proyek Laravel Anda dari GitHub adalah salah satu hal terpenting yang perlu Anda ketahui sebagai pengembang perangkat lunak. Ini memberi Anda kemampuan untuk mengakses jutaan proyek Laravel open source yang ada di luar sana.

Dalam konten ini, kami akan memberikan langkah-langkah yang jelas tentang cara mengkloning proyek Laravel dari GitHub.

## Prasyarat
1. **[GIT](https://git-scm.com/)**
2. **[PHP](https://www.php.net/downloads.php)**
3. **[NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)**
4. **[COMPOSER](https://getcomposer.org/download/)**

## Kloning Repositori
1. Kloning Repositori

Buka terminal kemudian jalankan perintah Berikut
>git clone https://github.com/Muhfikri12/Kelompok-3.git

2. Masuk direktori
>cd Kelompok-3

3. Menyiapkan Proyek

Untuk memasang semua dependensi yang ada dalam file package.json, Jalankan perintah Berikut
>npm i

Untuk memasang semua dependensi yang ada dalam file composer.json, Jalankan perintah Berikut
>composer i

4. Menyiapkan file .env

Untuk menyiapkan .env , ubah nama .env.example menjadi .env

5. Menyiapkan Database

Untuk Menyiapkan Database, didalam file .env , Temukan bagian kode block seperti dibawah ini.

```json
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<nama-database>
DB_USERNAME=<username-database>
DB_PASSWORD=<password-database>
```
Blok Kode diatas mewakili koneksi database, untuk bagian nama-database, username-database dan password-database silahkan ganti menyesuaikan dengan database yang anda miliki.

6. Generate Key

Untuk membuat key, jalankan perintah
>php artisan key:generate

7. Migrasi database

Untuk migrasi database, jalankan perintah
>php artisan migrate

8. Menyiapkan seeder database

Untuk menjalankan seeder, supaya di database terisi initial data yang sudah disiapkan, jalankan perintah
>php artisan db:seed

9. Jalankan Server

Untuk menjalankan server supaya bisa diakses didalam browser, jalankan perintah
>php artisan serve

10. Akses di browser

Buka browser anda, kemudian ketik di addressBox
>localhost:8000

## Kesimpulan
Jika anda berhasil menyelesaikan semua langkah 1 - 10 dengan sukses, Selamat!!!!










