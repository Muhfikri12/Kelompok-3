<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desar Hegarmanah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{ asset('assets/img/favicon.png') }} rel="icon">
    <link href={{ asset('assets/img/apple-touch-icon.png') }} rel="apple-touch-icon">

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('assets/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">

</head>

<body>

    @include('landing_page.header.header')

    <section class="container ">
        <div class="article">
            <div class="col-lg-6 order-1 order-lg-1 detail-article" style="text-decoration-style:none"
                data-aos="fade-up" data-aos-delay="200">
                <div class="detail-content-article">
                    <img src={{ asset('img/features-2.jpg') }} class="img-fluid responsive-image" alt="">
                    <article>
                        <p>{{ $articles->detail_content }}</p>
                    </article>
                    <strong>
                        <h6>Akan diadakan pada :</h6>
                    </strong>
                    <ul style="display: flex; gap:1rem; flex-direction:column">
                        <li><span><i data-feather="calendar"></i></span>
                            {{ $articles->event_date->translatedFormat('l, d F Y') }}
                        </li>
                        <li><span><i data-feather="clock"></i></span>{{ $articles->event_time }}</li>
                        <li><span><i data-feather="map-pin"></i></span>{{ $articles->place }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 order-2 order-lg-2 info-article" data-aos="fade-up" data-aos-delay="200">
                <div class="list-info-article">
                    <h4>Event Terbaru</h4>
                    <div class="info-content-article">
                        <img src={{ asset('img/features-2.jpg') }} class="img-fluid" alt="">
                        <div class="info-detail-article">
                            <h5>{{ $articles->title }}</h5>
                            <ul>
                                <li><span class="ac"><i data-feather="calendar"></i></span>
                                    {{ $articles->event_date->translatedFormat('l, d F Y') }}
                                </li>
                                <li><span class="ac"><i data-feather="clock"></i></span>{{ $articles->event_time }}
                                </li>
                            </ul>
                            <p></p>
                            <a href="#" class="btn more-btn">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('landing_page.footer.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
    <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
    <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>

    <!-- Template Main JS Files -->
    <script src={{ asset('assets/js/main.js') }}></script>

    <!-- feather icons -->
    <script>
        feather.replace();
    </script>


</body>
