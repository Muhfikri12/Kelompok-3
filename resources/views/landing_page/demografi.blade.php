<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desa Hegarmanah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href= "{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">

    {{-- Asset Datatable --}}

    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">
    <script defer src="{{ asset('js/dataTables.js') }}"></script>
    <script defer src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
    <script defer src="{{ asset('js/script.js') }}"></script>

    <!-- Fonts -->
    {{-- <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

     <!-- Styles -->
     <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet"> --}}

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">

    @stack('css')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('landing_page.header.header')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-lg-0 order-lg-1 order-2 pt-5"
                    data-aos="fade-up">
                    <div>
                        <h1>App landing page template</h1>
                        <h2>Lorem ipsum dolor sit amet, tota senserit percipitur ius ut, usu et fastidii forensibus
                            voluptatibus. His ei nihil feugait</h2>
                        <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
                        <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-lg-2 hero-img order-1"
                    data-aos="fade-up">
                    <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    {{-- Section Deskripsi Demografi --}}
    <section id="details" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="{{ asset('assets/img/details-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Demografi Desa Hegarmanah</h3>
                    <p>
                        Gambaran Demografi merupakan gambaran kependudukan dalam arti luas terhadap perkembangan dan
                        persebarannya. Oleh karena itu jumlah penduduk yang besar merupakan modal dasar yang efektif
                        bagi pembangunan yang berkelanjutan. Jumlah penduduk yang besar dan berkualitas baik dengan
                        pertumbuhan yang teratur akan menjadi dasar dalam mencapai tujuan pembangunan.
                    </p>
                </div>
            </div>


        </div>
    </section>
    <!-- End Details Section -->

    <main id="main">
        <div id="demografi">
            <div class="demografi-newsletter">
                <div class="container">
                    @foreach ($results as $kategori => $years)
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ strtoupper('Tabel Jumlah Penduduk berdasarkan ' . $kategori) }}
                                </h5>
                                <table class="table-bordered table-stripped display nowrap datatable table"
                                    style="width: 100%">
                                    <thead>
                                        <tr class="table-secondary">
                                            <th>{{ __('Tahun') }}</th>
                                            <th>{{ strtoupper($kategori) }}</th>
                                            <th>{{ __('Jumlah') }}</th>
                                            <th>Prosentase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($years as $year => $items)
                                            @foreach ($items as $item)
                                                <tr>
                                                    <td>{{ $item->tahun ?? '-' }}</td>
                                                    <td>{{ $item->keterangan ?? '-' }}</td>
                                                    <td>{{ $item->total . ' ' . $item->satuan ?? '-' }}</td>
                                                    <td>{{ round(($item->total / $items->sum('total')) * 100, 2) . ' %' }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="table-secondary">
                                                <td>{{ $year }}</td>
                                                <td>Total</td>
                                                <td>{{ $items->sum('total') . ' ' . $items->first()->satuan ?? '' }}
                                                </td>
                                                <td>100%</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('landing_page.footer.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    {{-- <script src="{{ asset('js/sb-admin-2.min.js') }}"></script> --}}
    {{-- @stack('js') --}}

</body>

</html>
