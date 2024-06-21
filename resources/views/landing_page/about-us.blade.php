<x-root-lp>
    <x-navbar-lp />
    <section id="details" class="details">
        <div class="container">
            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/whois.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Siapa Kami</h3>
                    <p>
                        {{ $data->about_us }}
                    </p>
                </div>
            </div>
            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="assets/img/location.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5" data-aos="fade-up">
                    <h3>Lokasi Kami</h3>
                    <p>
                        {{ $data->alamat }}
                    </p>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/profile.png" class="img-fluid" width="300" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Pimpinan Desa</h3>
                    <p>
                        Nama:
                        Bapak/Ibu [Nama Lengkap Kepala Desa]
                    </p>
                    <p>
                        Jabatan:
                        [Nama Jabatan]
                    </p>
                    <p>
                        NIP:
                        [xxxxxxxxxxxxxxxx]
                    </p>
                    <p>
                        Kepala Desa [Nama Desa] selalu terbuka untuk mendengarkan aspirasi dan masukan dari masyarakat.
                        Untuk berkomunikasi langsung, silakan menghubungi:

                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> Email: fulan@gmail.com</li>
                        <li><i class="bi bi-check"></i>Alamat: Jl. Raya Tagog No. 128 Padalarang</li>
                    </ul>
                </div>
            </div>
        </div>
        <x-footer-lp />
    </section><!-- End Details Section -->
</x-root-lp>
