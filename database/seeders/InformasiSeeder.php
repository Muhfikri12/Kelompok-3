<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                'judul' => 'PROSES PEMBUATAN KTP',
                'description' => "<p>Proses pembuatan Kartu Tanda Penduduk (KTP) di desa melibatkan beberapa tahapan. Berikut adalah langkah-langkah umumnya:</p>

                <ol>
                    <li>
                    <p><strong>Pengumpulan Dokumen</strong>:</p>
                
                    <ul>
                        <li>Fotokopi Kartu Keluarga (KK).</li>
                        <li>Akta kelahiran.</li>
                        <li>Surat pengantar dari RT/RW setempat.</li>
                    </ul>
                    </li>
                    <li>
                    <p><strong>Mengajukan Permohonan di Kantor Desa/Kelurahan</strong>:</p>
                
                    <ul>
                        <li>Pemohon membawa dokumen yang diperlukan ke kantor desa atau kelurahan.</li>
                        <li>Mengisi formulir permohonan pembuatan KTP.</li>
                    </ul>
                    </li>
                    <li>
                    <p><strong>Verifikasi Dokumen</strong>:</p>
                
                    <ul>
                        <li>Petugas desa atau kelurahan memeriksa kelengkapan dan keabsahan dokumen.</li>
                        <li>Jika dokumen lengkap dan sah, permohonan akan diproses lebih lanjut.</li>
                    </ul>
                    </li>
                    <li>
                    <p><strong>Pengambilan Data Biometrik</strong>:</p>
                
                    <ul>
                        <li>Foto pemohon.</li>
                        <li>Sidik jari.</li>
                        <li>Tanda tangan elektronik.</li>
                    </ul>
                    </li>
                    <li>
                    <p><strong>Pengajuan ke Dinas Kependudukan dan Catatan Sipil (Disdukcapil)</strong>:</p>
                
                    <ul>
                        <li>Setelah data lengkap, permohonan dikirim ke Disdukcapil untuk diproses.</li>
                        <li>Data diinput ke dalam sistem kependudukan nasional.</li>
                    </ul>
                    </li>
                    <li>
                    <p><strong>Proses Pencetakan KTP</strong>:</p>
                
                    <ul>
                        <li>KTP dicetak oleh Disdukcapil.</li>
                        <li>KTP yang sudah dicetak dikirim kembali ke desa atau kelurahan.</li>
                    </ul>
                    </li>
                    <li>
                    <p><strong>Pengambilan KTP</strong>:</p>
                
                    <ul>
                        <li>Pemohon diberitahu untuk mengambil KTP di kantor desa atau kelurahan.</li>
                        <li>Pemohon membawa bukti pengajuan dan identitas lainnya untuk mengambil KTP.</li>
                    </ul>
                    </li>
                </ol>
                
                <p>Proses ini bisa berbeda tergantung kebijakan daerah dan kondisi tertentu. Beberapa daerah mungkin memiliki layanan online untuk mempercepat proses pembuatan KTP.</p>"
            ],
            [
                "name" => "Proses pembuatan Kartu Keluarga (KK)",
                'description' => ''
            ]
            ];
    }
}
