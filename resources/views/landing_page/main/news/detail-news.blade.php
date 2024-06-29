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
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> --}}

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

    @include('components.navbar-lp')

    <section class="bg0">
        <div class="container">
            <div class="row row-article m-rl--1">
                <div class="col-md-6 p-rl-1 p-b-2">
                    <div class="bg-img1 size-a-3 how1 pos-relative"
                        style="background-image: {{ asset('images/post-01.jpg') }};">
                        <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                            <a href="#"
                                class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                Business
                            </a>

                            <h3 class="how1-child2 m-t-14 m-b-10">
                                <a href="blog-detail-01.html" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                    Microsoft quisque at ipsum vel orci eleifend ultrices
                                </a>
                            </h3>

                            <span class="how1-child2">
                                <span class="f1-s-4 cl11">
                                    Jack Sims
                                </span>

                                <span class="f1-s-3 cl11 m-rl-3">
                                    -
                                </span>

                                <span class="f1-s-3 cl11">
                                    Feb 16
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 p-rl-1">
                    <div class="row m-rl--1">
                        <div class="col-12 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-4 how1 pos-relative"
                                style="background-image: url(images/post-02.jpg);">
                                <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                    <a href="#"
                                        class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        Culture
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="blog-detail-01.html"
                                            class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                            London ipsum dolor sit amet, consectetur adipiscing elit.
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-5 how1 pos-relative"
                                style="background-image: url(images/post-03.jpg);">
                                <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    <a href="#"
                                        class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        Life Style
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="blog-detail-01.html"
                                            class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            Pellentesque dui nibh, pellen-tesque ut dapibus ut
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-5 how1 pos-relative"
                                style="background-image: url(images/post-04.jpg);">
                                <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    <a href="#"
                                        class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        Sport
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="blog-detail-01.html"
                                            class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            Motobike Vestibulum vene-natis purus nec nibh volutpat
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="trending-area fix" style="margin-top: 5rem">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30" data-view-count="100">
                            <div class="detail-content-news">
                                <img src="{{ asset($news->photo) }}" class="img-fluid responsive-image mb-2"
                                    style="border-radius: 1rem" alt="">
                                <h4><strong>{{ $news->title }}</strong></h4>
                                <article>
                                    {!! $news->detail_content !!}
                                </article>
                            </div>
                        </div>

                        <!-- Trending Bottom -->
                        <div class="trending-bottom " style="margin-top: 1.5rem">
                            <div class="row ">
                                {{-- @foreach ($posts as $item)
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ asset($item->photo) }}" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1">{{ $item->name }}</span>
                                                <p><a
                                                        href="{{ route('news.article', ['id' => $item->article_id]) }}">{{ Str::limit($item->content, 100) }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}
                            </div>
                        </div>

                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <strong class=" text-primary">Berita Terbaru</strong>
                        </div>
                        @foreach ($listNews as $item)
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset($item->photo) }}" alt=""
                                        class="responsive-fixed-image">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1 mb-0">{{ $item->name }}</span>
                                    <small>
                                        <p><a
                                                href="{{ route('news.article', ['id' => $item->article_id]) }}">{{ Str::limit($item->content, 80) }}</a>
                                        </p>
                                    </small>
                                </div>
                            </div>
                        @endforeach
                        <div class="trand-right-single d-flex justify-content-center">
                            <a class="btn btn-primary" href=""> Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> --}}



    <!-- feather icons -->
    <script>
        feather.replace();
    </script>


</body>
