<x-root-lp>
    <x-navbar-lp />
    <!-- HEADER IMAGE -->
    <header id="geografi-header" class="header-image d-none d-md-block text-white">
        <div class="header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-3">Perangkat Desa Hegarmanah</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- END IMAGE --}}

    {{-- Section Deskripsi Demografi --}}
    <section id="features" class="features mt-5">
        <div class="container">
            <div class="d-flex justify-content-center p-3">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @foreach ($results as $record)
                    <div class="col" data-aos="zoom-in">
                        <div class="card text-center h-100">
                            <div class="image-container">
                                    <img src="{{ file_exists(public_path('storage/petugas/' . $record->photo)) ? asset('storage/petugas/' . $record->photo)  : asset('asset-page/empty.jpg') }}"
                                        class="card-img-top" alt="{{ $record->name }}" style="height:500px; object-fit: cover;
                                        object-position: center;"/>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $record->name ?? '' }}</h5>
                                    <p class="card-text">{{ $record->position->name ?? '' }}</p>
                                    <a href="{{ route('data-tugas', $record->id) }}" class="text-muted">
                                        <u>Tugas dan Fungsi</u>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Details Section -->
    <x-footer-lp />
</x-root-lp>


@push('js')
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
@endpush
