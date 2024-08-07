    <div class="footer-top bg-dark text-light my-0">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <h3>Desa Hegarmanah</h3>
                    <p>Desa Hegarmanah adalah salah satu desa yang terletak di Kecamatan Cicantayan, Kabupaten Sukabumi,
                        Provinsi Jawa Barat, Indonesia.
                    </p>
                    <p>Alamat: Jalan Hegarmanah No 1 Kp Hegarmanah RT/RW 001/005</p>
                    <p>Kode Pos: 43155</p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <h3>Halaman Menu</h3>
                    <div class="footer-item d-flex flex-column">
                        <a href="{{ route('about-us') }}" class="text-light"><i class="fa fa-angle-right me-2"></i>Tentang
                            Kami</a>
                        <a href="{{ route('visi-misi') }}" class="text-light"><i class="fa fa-angle-right me-2"></i> Visi
                            & Misi</a>
                        <a href="{{ route('sejarah') }}" class="text-light"><i class="fa fa-angle-right me-2"></i>
                            Sejarah</a>
                        <a href="{{ route('data-demografi') }}" class="text-light"><i
                                class="fa fa-angle-right me-2"></i> Demografi</a>
                        <a href="{{ route('data-geografi') }}" class="text-light"><i class="fa fa-angle-right me-2"></i>
                            Geografi</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <h3>Manajemen Desa</h3>
                    <div class="footer-item d-flex flex-column">
                        <a href="{{ route('petugas') }}" class="text-light"><i class="fas fa-angle-right me-2"></i>
                            Perangkat Desa</a>
                        <a href="{{ route('struktur') }}" class="text-light"><i
                                class="fas fa-angle-right me-2"></i>Struktur Organisasi</a>
                        <a href="{{ route('data-lembaga') }}" class="text-light"><i class="fas fa-angle-right me-2"></i>
                            Lembaga Desa</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <h3>Kontak Info</h3>
                    <div class="footer-item d-flex flex-column">
                        <a href="" class="text-light"><i class="fas fa-angle-right me-2"></i>Kantor Desa</a>
                        <a href="" class="text-light"><i class="fas fa-angle-right me-2"></i> Telepon</a>
                        <a href="mailto:{{ $data->email }}" class="{{ $data->email ? 'text-light' : 'd-none' }}"><i
                                class="fas fa-angle-right me-2"></i>
                            Email</a>
                        <a href="{{ $data->yt_link }}" class="{{ $data->yt_link ? 'text-light' : 'd-none' }}">
                            <i class="fas fa-angle-right me-2"></i>Youtube
                        </a>
                        <a href="{{ $data->ig_link }}" class="{{ $data->ig_link ? 'text-light' : 'd-none' }}">
                            <i class="fas fa-angle-right me-2"></i>Instagram
                        </a>
                        <a href="{{ $data->fb_link }}" class="{{ $data->fb_link ? 'text-light' : 'd-none' }}">
                            <i class="fas fa-angle-right me-2"></i>Facebook
                        </a>
                        <a href="{{ $data->wa_link }}" class="{{ $data->wa_link ? 'text-light' : 'd-none' }}">
                            <i class="fas fa-angle-right me-2"></i>WhatsApp
                    </div>
                </div>

            </div>
        </div>
    </div>
