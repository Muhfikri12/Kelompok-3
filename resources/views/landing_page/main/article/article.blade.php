<div class="row content article_items">

    <div class="header-article-event" data-aos="fade-up">
        <h4>Event Terbaru</h4>
    </div>
    @foreach ($article as $item)
        <div class="card pt-3 shadow bg-body-tertiary rounded" data-aos="fade-up" data-aos-delay="100"
            style="width: 18rem;">

            <img src="{{ asset($item->photo) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <strong class="card-title">{{ $item->title }}</strong>
                <p class="card-text">{{ $item->content }}</p>
                <ul>
                    <li><span><i style="margin-right: 1rem" data-feather="calendar"></i></span>
                        {{-- {{ $item->event_date->translatedFormat('l, d F Y') }} --}}
                    </li>
                    <li><span><i style="margin-right: 1rem" data-feather="clock"></i></span>{{ $item->event_time }}</li>
                    {{-- <li><span><i style="margin-right: 1rem" data-feather="map-pin"></i></span>{{ $item->place }}</li> --}}
                </ul>
                <a href="{{ route('article', $item->id) }}" class="btn more-btn">Lihat Detail</a>
            </div>
        </div>
    @endforeach

</div><!-- Features Item -->
