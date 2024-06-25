<div class="row content article_items">

    <div class="header-article-event" data-aos="fade-up">
        <h4>Event Terbaru</h4>
    </div>

    @foreach ($article as $item)
        <div class=" show_article d-flex align-items-center order-2 order-lg-1" style="justify-content: space-between"
            data-aos="fade-up" data-aos-delay="100">
            <div class="article-content" style="width: 50%">
                <h3>{{ $item->title }}</h3>
                <p>
                    {{ $item->content }}
                </p>
                <ul>
                    <li><span><i data-feather="calendar"></i></span>
                        {{ $item->event_date->translatedFormat('l, d F Y') }}
                    </li>
                    <li><span><i data-feather="clock"></i></span>{{ $item->event_time }}</li>
                    <li><span><i data-feather="map-pin"></i></span>{{ $item->place }}</li>
                </ul>
                <a href="{{ route('article') }}" class="btn more-btn">Lihat Detail</a>
            </div>
            <div class="col-lg-4 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                <img src={{ asset('image/' . $item->photo) }} class="img-fluid" alt="">
            </div>
        </div>
    @endforeach



</div><!-- Features Item -->
