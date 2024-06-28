<?php
namespace Database\Seeders;



use App\Models\InformasiPublik;
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
                "judul" => "Proses pembuatan Kartu Keluarga (KK)",
                'description' => '<p>Proses pembuatan Kartu Keluarga (KK) di desa atau kelurahan melibatkan beberapa tahapan yang harus dilalui oleh pemohon. Berikut adalah tahapan-tahapan tersebut:</p>

                <h3>1. <strong>Persiapan Dokumen</strong></h3>

                <p>Pemohon harus menyiapkan dokumen-dokumen yang diperlukan untuk pengajuan KK baru atau perubahan KK:</p>

                <ul>
                    <li>Surat pengantar dari RT/RW setempat.</li>
                    <li>Fotokopi KTP pemohon.</li>
                    <li>Akta nikah atau buku nikah (untuk pasangan yang baru menikah).</li>
                    <li>Akta kelahiran anak (jika ada).</li>
                    <li>Surat keterangan pindah datang (jika pindah dari wilayah lain).</li>
                </ul>

                <h3>2. <strong>Pengajuan Permohonan di Kantor Desa/Kelurahan</strong></h3>

                <p>Pemohon membawa semua dokumen yang diperlukan ke kantor desa atau kelurahan:</p>

                <ul>
                    <li>Mengisi formulir permohonan pembuatan KK yang tersedia di kantor desa atau kelurahan.</li>
                    <li>Menyerahkan dokumen-dokumen pendukung kepada petugas desa atau kelurahan.</li>
                </ul>

                <h3>3. <strong>Verifikasi dan Validasi Dokumen</strong></h3>

                <p>Petugas desa atau kelurahan akan melakukan verifikasi dan validasi terhadap dokumen-dokumen yang diserahkan:</p>

                <ul>
                    <li>Memastikan dokumen yang diserahkan lengkap dan sah.</li>
                    <li>Memeriksa keabsahan data dalam dokumen tersebut.</li>
                </ul>

                <h3>4. <strong>Penerbitan Surat Pengantar</strong></h3>

                <p>Jika semua dokumen sudah diverifikasi dan valid, petugas desa atau kelurahan akan menerbitkan surat pengantar untuk pengajuan pembuatan KK ke Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil).</p>

                <h3>5. <strong>Pengajuan ke Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil)</strong></h3>

                <p>Pemohon atau petugas desa/kelurahan mengajukan surat pengantar dan dokumen pendukung ke Disdukcapil:</p>

                <ul>
                    <li>Menyerahkan semua dokumen yang diperlukan di loket pelayanan Disdukcapil.</li>
                    <li>Disdukcapil akan memproses permohonan tersebut dan memasukkan data pemohon ke dalam sistem kependudukan.</li>
                </ul>

                <h3>6. <strong>Proses Pencetakan Kartu Keluarga</strong></h3>

                <p>Disdukcapil akan mencetak KK setelah semua data terinput dan diverifikasi:</p>

                <ul>
                    <li>Proses ini mungkin memerlukan waktu beberapa hari tergantung pada kebijakan dan volume permohonan di Disdukcapil.</li>
                </ul>

                <h3>7. <strong>Pengambilan Kartu Keluarga</strong></h3>

                <p>Pemohon akan diberitahu untuk mengambil KK yang sudah jadi:</p>

                <ul>
                    <li>Pemohon dapat mengambil KK di kantor Disdukcapil atau di kantor desa/kelurahan sesuai kebijakan setempat.</li>
                    <li>Pemohon membawa bukti pengajuan dan identitas diri untuk mengambil KK.</li>
                </ul>

                <h3>8. <strong>Distribusi Kartu Keluarga</strong></h3>

                <p>Beberapa daerah mungkin memiliki sistem distribusi KK melalui petugas desa atau kelurahan untuk memudahkan warga:</p>

                <ul>
                    <li>KK yang sudah jadi akan diserahkan kembali ke desa atau kelurahan untuk didistribusikan kepada warga.</li>
                </ul>

                <p>Setiap daerah mungkin memiliki variasi prosedur, namun tahapan umum di atas biasanya berlaku di banyak tempat di Indonesia.</p>'
            ],
            [
                "judul" => 'Pembuatan Akta Kelahiran',
                "description" => "<p>Proses pembuatan Akta Kelahiran melibatkan beberapa tahapan yang harus dilalui oleh pemohon. Berikut adalah tahapan-tahapan tersebut:</p>

                <h3>1. <strong>Persiapan Dokumen</strong></h3>

                <p>Pemohon harus menyiapkan dokumen-dokumen yang diperlukan untuk pengajuan Akta Kelahiran:</p>

                <ul>
                    <li>Surat keterangan kelahiran dari dokter, bidan, atau rumah sakit.</li>
                    <li>Fotokopi Kartu Keluarga (KK) orang tua.</li>
                    <li>Fotokopi Kartu Tanda Penduduk (KTP) kedua orang tua.</li>
                    <li>Fotokopi surat nikah atau akta perkawinan orang tua.</li>
                    <li>Fotokopi KTP dua orang saksi kelahiran.</li>
                    <li>Formulir pengajuan akta kelahiran (biasanya tersedia di kantor desa/kelurahan atau Dinas Kependudukan dan Pencatatan Sipil).</li>
                </ul>

                <h3>2. <strong>Pengajuan Permohonan di Kantor Desa/Kelurahan</strong></h3>

                <p>Pemohon membawa semua dokumen yang diperlukan ke kantor desa atau kelurahan:</p>

                <ul>
                    <li>Mengisi formulir permohonan pembuatan Akta Kelahiran yang tersedia di kantor desa atau kelurahan.</li>
                    <li>Menyerahkan dokumen-dokumen pendukung kepada petugas desa atau kelurahan.</li>
                </ul>

                <h3>3. <strong>Verifikasi dan Validasi Dokumen</strong></h3>

                <p>Petugas desa atau kelurahan akan melakukan verifikasi dan validasi terhadap dokumen-dokumen yang diserahkan:</p>

                <ul>
                    <li>Memastikan dokumen yang diserahkan lengkap dan sah.</li>
                    <li>Memeriksa keabsahan data dalam dokumen tersebut.</li>
                </ul>

                <h3>4. <strong>Penerbitan Surat Pengantar</strong></h3>

                <p>Jika semua dokumen sudah diverifikasi dan valid, petugas desa atau kelurahan akan menerbitkan surat pengantar untuk pengajuan pembuatan Akta Kelahiran ke Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil).</p>

                <h3>5. <strong>Pengajuan ke Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil)</strong></h3>

                <p>Pemohon atau petugas desa/kelurahan mengajukan surat pengantar dan dokumen pendukung ke Disdukcapil:</p>

                <ul>
                    <li>Menyerahkan semua dokumen yang diperlukan di loket pelayanan Disdukcapil.</li>
                    <li>Disdukcapil akan memproses permohonan tersebut dan memasukkan data kelahiran ke dalam sistem kependudukan.</li>
                </ul>

                <h3>6. <strong>Proses Pencetakan Akta Kelahiran</strong></h3>

                <p>Disdukcapil akan mencetak Akta Kelahiran setelah semua data terinput dan diverifikasi:</p>

                <ul>
                    <li>Proses ini mungkin memerlukan waktu beberapa hari tergantung pada kebijakan dan volume permohonan di Disdukcapil.</li>
                </ul>

                <h3>7. <strong>Pengambilan Akta Kelahiran</strong></h3>

                <p>Pemohon akan diberitahu untuk mengambil Akta Kelahiran yang sudah jadi:</p>

                <ul>
                    <li>Pemohon dapat mengambil Akta Kelahiran di kantor Disdukcapil atau di kantor desa/kelurahan sesuai kebijakan setempat.</li>
                    <li>Pemohon membawa bukti pengajuan dan identitas diri untuk mengambil Akta Kelahiran.</li>
                </ul>

                <h3>8. <strong>Distribusi Akta Kelahiran</strong></h3>

                <p>Beberapa daerah mungkin memiliki sistem distribusi Akta Kelahiran melalui petugas desa atau kelurahan untuk memudahkan warga:</p>

                <ul>
                    <li>Akta Kelahiran yang sudah jadi akan diserahkan kembali ke desa atau kelurahan untuk didistribusikan kepada warga.</li>
                </ul>

                <p>Setiap daerah mungkin memiliki variasi prosedur, namun tahapan umum di atas biasanya berlaku di banyak tempat di Indonesia.</p>"
            ],
            [
                "judul" => "Proses pembuatan Akta Kematian",
                'description' => "<p>Proses pembuatan Akta Kematian melibatkan beberapa tahapan yang harus dilalui oleh pemohon. Berikut adalah tahapan-tahapan tersebut:</p>

                <h3>1. <strong>Persiapan Dokumen</strong></h3>

                <p>Pemohon harus menyiapkan dokumen-dokumen yang diperlukan untuk pengajuan Akta Kematian:</p>

                <ul>
                    <li>Surat keterangan kematian dari dokter, bidan, atau rumah sakit.</li>
                    <li>Fotokopi Kartu Keluarga (KK) almarhum/almarhumah.</li>
                    <li>Fotokopi Kartu Tanda Penduduk (KTP) almarhum/almarhumah.</li>
                    <li>Fotokopi KTP pelapor (biasanya anggota keluarga yang melaporkan kematian).</li>
                    <li>Fotokopi KTP dua orang saksi kematian.</li>
                    <li>Formulir pengajuan akta kematian (biasanya tersedia di kantor desa/kelurahan atau Dinas Kependudukan dan Pencatatan Sipil).</li>
                </ul>

                <h3>2. <strong>Pengajuan Permohonan di Kantor Desa/Kelurahan</strong></h3>

                <p>Pemohon membawa semua dokumen yang diperlukan ke kantor desa atau kelurahan:</p>

                <ul>
                    <li>Mengisi formulir permohonan pembuatan Akta Kematian yang tersedia di kantor desa atau kelurahan.</li>
                    <li>Menyerahkan dokumen-dokumen pendukung kepada petugas desa atau kelurahan.</li>
                </ul>

                <h3>3. <strong>Verifikasi dan Validasi Dokumen</strong></h3>

                <p>Petugas desa atau kelurahan akan melakukan verifikasi dan validasi terhadap dokumen-dokumen yang diserahkan:</p>

                <ul>
                    <li>Memastikan dokumen yang diserahkan lengkap dan sah.</li>
                    <li>Memeriksa keabsahan data dalam dokumen tersebut.</li>
                </ul>

                <h3>4. <strong>Penerbitan Surat Pengantar</strong></h3>

                <p>Jika semua dokumen sudah diverifikasi dan valid, petugas desa atau kelurahan akan menerbitkan surat pengantar untuk pengajuan pembuatan Akta Kematian ke Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil).</p>

                <h3>5. <strong>Pengajuan ke Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil)</strong></h3>

                <p>Pemohon atau petugas desa/kelurahan mengajukan surat pengantar dan dokumen pendukung ke Disdukcapil:</p>

                <ul>
                    <li>Menyerahkan semua dokumen yang diperlukan di loket pelayanan Disdukcapil.</li>
                    <li>Disdukcapil akan memproses permohonan tersebut dan memasukkan data kematian ke dalam sistem kependudukan.</li>
                </ul>

                <h3>6. <strong>Proses Pencetakan Akta Kematian</strong></h3>

                <p>Disdukcapil akan mencetak Akta Kematian setelah semua data terinput dan diverifikasi:</p>

                <ul>
                    <li>Proses ini mungkin memerlukan waktu beberapa hari tergantung pada kebijakan dan volume permohonan di Disdukcapil.</li>
                </ul>

                <h3>7. <strong>Pengambilan Akta Kematian</strong></h3>

                <p>Pemohon akan diberitahu untuk mengambil Akta Kematian yang sudah jadi:</p>

                <ul>
                    <li>Pemohon dapat mengambil Akta Kematian di kantor Disdukcapil atau di kantor desa/kelurahan sesuai kebijakan setempat.</li>
                    <li>Pemohon membawa bukti pengajuan dan identitas diri untuk mengambil Akta Kematian.</li>
                </ul>

                <h3>8. <strong>Distribusi Akta Kematian</strong></h3>

                <p>Beberapa daerah mungkin memiliki sistem distribusi Akta Kematian melalui petugas desa atau kelurahan untuk memudahkan warga:</p>

                <ul>
                    <li>Akta Kematian yang sudah jadi akan diserahkan kembali ke desa atau kelurahan untuk didistribusikan kepada keluarga almarhum/almarhumah.</li>
                </ul>

                <p>Setiap daerah mungkin memiliki variasi prosedur, namun tahapan umum di atas biasanya berlaku di banyak tempat di Indonesia.</p>"
            ],
            [
                "judul" => "Pembuatan Surat Pindah Domisili",
                "description" => "<p>Proses pembuatan Surat Pindah Domisili melibatkan beberapa tahapan yang harus dilalui oleh pemohon. Berikut adalah tahapan-tahapan tersebut:</p>

                <h3>1. <strong>Persiapan Dokumen</strong></h3>

                <p>Pemohon harus menyiapkan dokumen-dokumen yang diperlukan untuk pengajuan Surat Pindah Domisili:</p>

                <ul>
                    <li>Kartu Keluarga (KK) asli dan fotokopi.</li>
                    <li>Kartu Tanda Penduduk (KTP) asli dan fotokopi.</li>
                    <li>Surat Pengantar dari RT/RW setempat.</li>
                    <li>Formulir permohonan pindah yang biasanya tersedia di kantor desa/kelurahan.</li>
                    <li>Pas foto terbaru (ukuran biasanya disesuaikan dengan ketentuan setempat).</li>
                </ul>

                <h3>2. <strong>Mengajukan Permohonan di Kantor Desa/Kelurahan</strong></h3>

                <p>Pemohon membawa semua dokumen yang diperlukan ke kantor desa atau kelurahan:</p>

                <ul>
                    <li>Mengisi formulir permohonan pembuatan Surat Pindah Domisili yang tersedia di kantor desa atau kelurahan.</li>
                    <li>Menyerahkan dokumen-dokumen pendukung kepada petugas desa atau kelurahan.</li>
                </ul>

                <h3>3. <strong>Verifikasi dan Validasi Dokumen</strong></h3>

                <p>Petugas desa atau kelurahan akan melakukan verifikasi dan validasi terhadap dokumen-dokumen yang diserahkan:</p>

                <ul>
                    <li>Memastikan dokumen yang diserahkan lengkap dan sah.</li>
                    <li>Memeriksa keabsahan data dalam dokumen tersebut.</li>
                </ul>

                <h3>4. <strong>Penerbitan Surat Pengantar dari Desa/Kelurahan</strong></h3>

                <p>Jika semua dokumen sudah diverifikasi dan valid, petugas desa atau kelurahan akan menerbitkan surat pengantar untuk pengajuan Surat Pindah Domisili ke Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil).</p>

                <h3>5. <strong>Pengajuan ke Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil)</strong></h3>

                <p>Pemohon membawa surat pengantar dari desa/kelurahan dan dokumen pendukung ke Disdukcapil:</p>

                <ul>
                    <li>Menyerahkan semua dokumen yang diperlukan di loket pelayanan Disdukcapil.</li>
                    <li>Disdukcapil akan memproses permohonan tersebut dan memasukkan data pemohon ke dalam sistem kependudukan.</li>
                </ul>

                <h3>6. <strong>Proses Penerbitan Surat Keterangan Pindah</strong></h3>

                <p>Disdukcapil akan menerbitkan Surat Keterangan Pindah setelah semua data terinput dan diverifikasi:</p>

                <ul>
                    <li>Proses ini mungkin memerlukan waktu beberapa hari tergantung pada kebijakan dan volume permohonan di Disdukcapil.</li>
                </ul>

                <h3>7. <strong>Pengambilan Surat Keterangan Pindah</strong></h3>

                <p>Pemohon akan diberitahu untuk mengambil Surat Keterangan Pindah yang sudah jadi:</p>

                <ul>
                    <li>Pemohon dapat mengambil Surat Keterangan Pindah di kantor Disdukcapil.</li>
                    <li>Pemohon membawa bukti pengajuan dan identitas diri untuk mengambil Surat Keterangan Pindah.</li>
                </ul>

                <h3>8. <strong>Proses di Tempat Tujuan Pindah</strong></h3>

                <p>Setelah mendapatkan Surat Keterangan Pindah, pemohon harus melapor ke RT/RW, kantor desa/kelurahan, dan Disdukcapil di tempat tujuan pindah:</p>

                <ul>
                    <li>Menyerahkan Surat Keterangan Pindah dan dokumen pendukung lainnya.</li>
                    <li>Melakukan pendaftaran ulang di Disdukcapil tempat tujuan untuk penerbitan Kartu Keluarga (KK) dan Kartu Tanda Penduduk (KTP) baru sesuai dengan alamat baru.</li>
                </ul>

                <p>Setiap daerah mungkin memiliki variasi prosedur, namun tahapan umum di atas biasanya berlaku di banyak tempat di Indonesia.</p>"
            ]
            ];

            foreach ($arr as $value) {
                $record = InformasiPublik::firstOrNew([
                    "judul" => $value['judul']
                ]);
                $record->description = $value['description'];
                $record->save();
            }
    }
}
