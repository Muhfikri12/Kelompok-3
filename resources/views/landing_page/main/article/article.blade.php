<div class="row content article_items">

    <div class="header-article-event" data-aos="fade-up">
        <h4>Event Terbaru</h4>
    </div>

    <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

        <div class="article-content">
            <h3>{{ $article->title }}</h3>
            <p>
                {{ $article->content }}
            </p>
            <ul>
                <li><span><i data-feather="calendar"></i></span> {{ $article->event_date->translatedFormat('l, d F Y') }}
                </li>
                <li><span><i data-feather="clock"></i></span>{{ $article->event_time }}</li>
                <li><span><i data-feather="map-pin"></i></span>{{ $article->place }}</li>
            </ul>
            <p></p>
            <a href="{{ route('article') }}" class="btn more-btn">Lihat Detail</a>
        </div>

    </div>

    <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
        <img src={{ asset('img/features-2.jpg') }} class="img-fluid" alt="">
    </div>

</div><!-- Features Item -->
