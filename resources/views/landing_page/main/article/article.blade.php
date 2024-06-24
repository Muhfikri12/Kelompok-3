<div class="row content article_items">

    <div class="header-article-event" data-aos="fade-up">
        <h4>Event Terbaru</h4>
    </div>

    @foreach ($article as $item)
        <div class="row show_article " data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-8 order-2 order-md-2" style=" margin-top:auto; margin-bottom:auto">
                <h3>{{ $item->title }}</h3>
                <p>
                    {{ $item->content }}
                </p>
                <ul>
                    <li><span><i style="margin-right: 1rem" data-feather="calendar"></i></span>
                        {{-- {{ $item->event_date->translatedFormat('l, d F Y') }} --}}
                    </li>
                    <li><span><i style="margin-right: 1rem" data-feather="clock"></i></span>{{ $item->event_time }}</li>
                    <li><span><i style="margin-right: 1rem" data-feather="map-pin"></i></span>{{ $item->place }}</li>
                </ul>
                <a href="{{ route('article') }}" class="btn more-btn">Lihat Detail</a>
            </div>
            <div class="col-md-4 pt-2 order-1 order-md-1" data-aos="fade-up" data-aos-delay="200">
                <img src={{ asset($item->photo) }} class="img-fluid" alt="">
            </div>
        </div>
    @endforeach
</div><!-- Features Item -->
