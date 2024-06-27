<div class="container-xxl py-6 news_content">
    <div class="container">
        <div class="header-article-event mb-3" data-aos="fade-up">
            <h4>Berita</h4>
        </div>
        <div class="row g-4">
            @foreach ($news as $item)
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="card text-bg-dark card_news">
                        <a href="{{ route('news.article', ['id' => $item->id]) }}">
                            <div class="card-img-container">
                                <img src="{{ asset($item->photo) }}" class="card-img card-img-zoom img-fluid"
                                    alt="...">
                            </div>
                        </a>
                        <div class="card-img-overlay d-flex align-items-end">
                            <div class="text-container">
                                <a href="{{ route('news.article', ['id' => $item->id]) }}"
                                    class="text-decoration-none text-dark">
                                    <strong>
                                        <h5 class="card-title mb-0 text-light">
                                            {{ ucwords(strtolower($item->title)) }}
                                        </h5>
                                    </strong>
                                </a>
                                <a href="{{ route('news.article', ['id' => $item->id]) }}"
                                    class="text-decoration-none text-dark">
                                    <p class="card-text text-light">{{ $item->content }}</p>
                                </a>
                                <p class="card-text mb-0 text-light"><small><span
                                            id="updated-at">{{ $item->updated_at }}</span></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
