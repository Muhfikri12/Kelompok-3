<x-root-lp>
    <x-navbar-lp />
    <!-- HEADER IMAGE -->
    <!-- HEADER IMAGE -->
    <header id="geografi-header" class="header-image text-white">
        <div class="header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-3">Tugas dan Fungsi</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- END IMAGE --}}

    {{-- END IMAGE --}}
    {{-- Section Deskripsi Demografi --}}
    <section id="features" class="features mt-5">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>{{ $record->position->name ?? '' }}</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card text-center">
                        <img src="{{ asset('storage/petugas/' . $record->photo) }}" class="card-img-top" alt="Profile Photo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $record->name ?? '' }}</h5>
                            <p class="card-text">{{ $record->position->name ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <h4>Fungsi dan Tugas:</h4>
                    <ul>
                        @foreach ($record->position->tasks as $item)
                            <li>{{ $item->name ?? '' }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End Details Section -->
    <x-footer-lp />
</x-root-lp>
