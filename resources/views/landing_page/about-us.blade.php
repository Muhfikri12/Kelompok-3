<x-root-lp>
    <x-navbar-lp />
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg mt-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>Tentang Kami</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->


    <section id="details" class="details">
        <div class="container">
            <div class="row content">
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    {!! $data->about_us !!}
                </div>
            </div>
            <div class="row content">
                <div class="col-md-8 pt-5" data-aos="fade-up">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43402.70622949173!2d106.78946238414318!3d-6.926033606711491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6830d1c4732cc5%3A0x14e9fd7726ffb468!2sHegarmanah%2C%20Kec.%20Cicantayan%2C%20Kabupaten%20Sukabumi%2C%20Jawa%20Barat!5e1!3m2!1sid!2sid!4v1719209176352!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0; margin-bottom: 2rem;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {!! $data->alamat !!}
                </div>
            </div>

            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="{{ asset('storage/petugas/' . $kades->photo) }}" class="img-fluid" width="300"
                        alt="photo-kades">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Pimpinan Desa</h3>
                    <div class="d-flex flex-column g-2 my-1">
                        <span>
                            Nama: {{ $kades->name ?? '' }}
                        </span>
                        <span>
                            NIP: {{ $kades->nip ?? '' }}
                        </span>
                    </div>
                    <p>
                        Kepala Desa Hegarmanah selalu terbuka untuk mendengarkan aspirasi dan masukan dari masyarakat.
                        Untuk berkomunikasi langsung, silakan menghubungi:
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i>Telepon: {{ $kades->phone }}</li>
                        <li><i class="bi bi-check"></i>Alamat: {{ $kades->address }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <x-footer-lp />
    </section><!-- End Details Section -->
</x-root-lp>
