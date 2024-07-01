<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($banner as $key => $item)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}"
                aria-current="@if ($loop->first) true @endif"
                class="@if ($loop->first) active @endif"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($banner as $key => $item)
            <div class="carousel-item @if ($loop->first) active @endif">
                <img class="d-block w-100" src="{{ asset('storage/banner/' . $item->photo) }}"
                    alt="{{ $item->judul ?? 'Slide ' . $key }}" />
                <div class="carousel-caption d-md-block">
                    <h5>{{ $item->judul ?? '' }}</h5>
                    <p class="line-clamp">{{ $item->description ?? '' }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
