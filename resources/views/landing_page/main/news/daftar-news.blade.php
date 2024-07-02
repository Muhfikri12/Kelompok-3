<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desar Hegarmanah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{ asset('assets/assets/img/logo_1.png') }} rel="icon">
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

</head>

<body>


    @include('components.navbar-lp')

    <header id="geografi-header" class="header-image text-white">
        <div class="header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-3">Berita Desa Hegarmanah</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="trending-area fix" style="margin-top: 5rem">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle" style="margin-bottom: 1rem">
                            <strong>Berita Populer</strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30" data-view-count="100">
                            <div class="trend-top-img">
                                <img src="{{ asset($topPosts->photo) }}" alt="">
                                <div class="trend-top-cap">
                                    <span>{{ $topPosts->name }}</span>
                                    <h2><a
                                            href="{{ route('news.article', ['id' => $topPosts->article_id]) }}">{{ Str::limit($topPosts->content, 70) }}</a>
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <!-- Trending Bottom -->
                        <div class="trending-bottom " style="margin-top: 1.5rem">
                            <div class="row ">
                                @foreach ($posts as $item)
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-20">
                                            <div class="trend-bottom-img mb-35">
                                                <img src="{{ asset($item->photo) }}" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1 mb-1">{{ $item->name }}</span>
                                                <p><a
                                                        href="{{ route('news.article', ['id' => $item->article_id]) }}">{{ Str::limit($item->content, 100) }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <strong>Acara Mendatang</strong>
                        </div>
                        @foreach ($article as $item)
                            <div class="trand-right-single mb-0 d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset($item->photo) }}" alt="" class="responsive-fixed-image">
                                </div>
                                <div class="trand-right-cap">
                                    <p class="mb-1"><a class="text-dark"
                                            href="{{ route('article', ['id' => $item->id]) }}">{{ Str::limit($item->title, 20) }}</a>
                                    </p>
                                    <div class="d-flex">
                                        <i data-feather="calendar" style="width: 1.2rem; height: 1.2rem; "></i>

                                        <p class="mx-2 mb-1" style="font-size: 14px">
                                            {{ $item->event_date->translatedFormat(' d F Y') }}
                                        </p>

                                    </div>
                                    <div class="d-flex">
                                        <i data-feather="clock" style="width: 1.2rem; height: 1.2rem;"></i>

                                        <p class="mx-2" style="font-size: 14px">{{ $item->event_time }}</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- feather icons -->
    <script>
        feather.replace();
    </script>
</body>

</html>
