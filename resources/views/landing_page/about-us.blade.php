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
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/whois.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    {!! $data->about_us !!}
                </div>
            </div>
            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="assets/img/location.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5" data-aos="fade-up">
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
