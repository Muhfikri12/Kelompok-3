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
                <button class="carousel-caption d-md-block" data-bs-toggle="modal"
                    data-bs-target="#{{ $key }}">
                    <h5>{{ $item->judul ?? '' }}</h5>
                    <p class="line-clamp">{{ $item->description ?? '' }}</p>
                </button>
                <div class="modal fade" id="{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>{{ $item->judul ?? '' }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $item->description ?? '' }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
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
