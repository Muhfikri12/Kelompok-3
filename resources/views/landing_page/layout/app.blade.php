<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desar Hegarmanah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{ asset('assets/img/jabar.png') }} rel="icon">
    <link href="img/favicon.ico" rel="icon">
    <link href={{ asset('assets/img/apple-touch-icon.png') }} rel="apple-touch-icon">

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet"> --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    {{-- bootstrap v5.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('assets/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">

    <style>
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
        }

        .carousel-item {
            height: 650px;

            /* Set the desired height */
        }

        .carousel-item .carousel-background {
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 0.5rem;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;

        }
    </style>

</head>

<body>

    @yield('header')

    @yield('hero_section')

    <!-- ======= Hero Section ======= -->

    <main id="main">


        <!-- ======= Details Section ======= -->
        <section id="details" class="details pt-0">
            <div class="container">
                @yield('article')
                @yield('news_article')
            </div>
        </section><!-- End Details Section -->



        <!-- ======= Gallery Section ======= -->
        {{-- <section id="gallery" class="gallery pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Perangkat Desa</h2>
                    <p>Dusun Hegarmanah, Desa Cicantayan, Kecamatan Cicantayan, Kabupaten Sumedang, 43155</p>
                </div>

            </div>

            <div class="container-fluid" data-aos="fade-up">
                <div class="gallery-slider swiper w-10">
                    <div class="swiper-wrapper">
                        @foreach ($staffWithPositions as $item)
                            <div class="swiper-slide shadow bg-body-tertiary rounded ">
                                <div class="card text-center">
                                    <img class="card-img-top" src="{{ asset('img/dp.jpeg') }}" alt="Card image">
                                    <div class="card-body">
                                        <p class="card-title fs-6"><strong>{{ $item->name }}</strong></p>
                                        <p class="card-text" style="font-size: 0.8rem">
                                            {{ optional($item->position)->name ?? '' }}.
                                        </p>
                                        <a href="#" class="btn btn-primary">Profile</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section --> --}}

    </main><!-- End #main -->

    @yield('footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
    <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
    <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>

    {{-- bootstrap v5 --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS Files -->
    <script src={{ asset('assets/js/main.js') }}></script>

    <!-- feather icons -->
    <script>
        feather.replace();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.getElementById('header');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) { // Adjust this value as needed
                    header.classList.add('header-scrolled');
                } else {
                    header.classList.remove('header-scrolled');
                }
            });
        });
    </script>

</body>

</html>
