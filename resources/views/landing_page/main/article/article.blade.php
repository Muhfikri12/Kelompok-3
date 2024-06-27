<div class="container-xxl py-6" id="article">
    <div class="container">
        <div class="header-article-event mb-3" data-aos="fade-up">
            <h4>Event Terbaru</h4>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($article as $item)
                <div class="col-md-6 col-lg-4  g-2">
                    <div class="card mx-auto" style="width: 18rem;">
                        <div class="zoom-effect">
                            <img src="{{ asset($item->photo) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <strong>
                                <h5 class="card-title mb-1">{{ ucwords(strtolower($item->title)) }}</h5>
                            </strong>
                            <p class="card-text-article text-dark">{!! $item->content !!}</p>
                            <p><i data-feather="calendar"></i>
                                <span>{{ $item->event_date->translatedFormat('l, d F Y') }}</span>
                            </p>
                            <p><i data-feather="clock"></i> <span>{{ $item->event_time }}</span></p>
                            <a href="{{ route('article', ['id' => $item->id]) }}" class="btn btn-primary">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{-- <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($article as $item)
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($item->photo) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{!! Str::limit($item->detail_content, $maxTextLength) !!}</p>
                            <p><i data-feather="calendar"></i>
                                <span>{{ $item->event_date->translatedFormat('l, d F Y') }}</span>
                            </p>
                            <p><i data-feather="clock"></i> <span>{{ $item->event_time }}</span></p>
                            <a href="{{ route('article', ['id' => $item->id]) }}" class="btn btn-primary">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
    </div>
</div>
