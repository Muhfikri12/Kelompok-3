<div class="container-xxl py-6 " id="article">
    <div class="container">
        <div class="header-article-event mb-3" data-aos="fade-up">
            <h4>Acara Terbaru</h4>
        </div>
        <div class="row">
            @foreach ($article as $item)
                <div class="col-sm-12 col-md-6 col-lg-4 g-2">
                    <div class="card mx-auto" style="width: 20rem;">
                        <div class="zoom-effect">
                            <img src="{{ asset($item->photo) }}" class="card-img-top img-fluid" alt="..."
                                style="width: 100%; height: auto;">
                        </div>
                        <div class="card-body">
                            <strong>
                                <p class="card-title mb-1" style="font-weight: 600">
                                    {{ ucwords(strtolower($item->title)) }}</p>
                            </strong>
                            <p class="card-text-article text-dark">{{ Str::limit($item->content, 60) }}</p>
                            <p style="margin-bottom: 0.5rem">
                                <i data-feather="calendar" style="width: 1.5rem; height: 1.5rem;"></i>
                                <span>{{ $item->event_date->translatedFormat('l, d F Y') }}</span>
                            </p>
                            <p>
                                <i data-feather="clock" style="width: 1.5rem; height: 1.5rem;"></i>
                                <span>{{ $item->event_time }}</span>
                            </p>
                            <a href="{{ route('article', ['id' => $item->id]) }}" class="btn btn-primary">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
