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

    {{-- bootstrap v5.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

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
            border-radius: 1rem;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;

        }
    </style>

</head>

<body>

    @include('landing_page.header.header')

    <section class="container " style="margin-top:1rem;">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slide as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }} shadow bg-body-tertiary rounded">
                        <div class="carousel-background" style="background-image: url('{{ asset($item->photo) }}');">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-light"><strong>{{ $item->title }}</strong></h5>
                            <p class="text-light">{{ $item->content }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <section class="container pt-0">
        <div class="article">
            <div class="col-lg-6 order-1 order-lg-1 detail-article" style="text-decoration-style:none"
                data-aos="fade-up" data-aos-delay="200">
                <div class="detail-content-article">
                    <img src={{ asset($articles->photo) }} class="img-fluid responsive-image" alt="">
                    <h4><strong>{{ $articles->title }}</strong></h4>
                    <article>
                        {!! $articles->detail_content !!}
                    </article>
                </div>
            </div>
            <div class="col-lg-5 order-2 order-lg-2 info-article" data-aos="fade-up" data-aos-delay="200">
                <div class="list-info-article">
                    <h4><strong>Event Terbaru</strong></h4>
                    <div>
                        @foreach ($listArticle as $item)
                            <div class="info-content-article">
                                <div class="img-container">
                                    <img src="{{ asset($item->photo) }}" class="img-fluid" alt="">
                                </div>
                                <div class="info-detail-article">
                                    <strong>{{ $item->title }}</strong>
                                    <ul>
                                        <li><span class="ac"><i data-feather="calendar"></i></span>
                                            {{ $item->event_date->translatedFormat('l, d F Y') }}
                                        </li>
                                        <li><span class="ac"><i
                                                    data-feather="clock"></i></span>{{ $item->event_time }}
                                        </li>
                                    </ul>
                                    <p></p>
                                    <a href="{{ route('article', $item->id) }}" class="btn more-btn">Lihat Detail</a>
                                </div>
                            </div>
                        @endforeach
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

    {{-- bootstrap v5 --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>



    <!-- feather icons -->
    <script>
        feather.replace();
    </script>


</body>
