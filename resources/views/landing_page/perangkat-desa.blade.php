<x-root-lp>
    <x-navbar-lp />
    {{-- Section Deskripsi Demografi --}}
    <section id="details" class="details">
        <div class="container">

            <div class="row content">
                <div class="col order-md-1 order-2 pt-5" data-aos="fade-up">
                    <h3>Perangkat Desa Hegarmanah Cicantayan</h3>
                </div>
            </div>
            <div class="d-flex bd-highlight mb-3 flex-row">
                @foreach ($results as $record)
                    <div class="card align-self-stretch m-2 p-2 text-center" style="width: 18rem; height: 25rem;">
                        <img src="{{ asset('storage/petugas/' . $record->photo) }}"
                            class="card-img-top responsive-image img-thumbnail rounded" alt="..." height="20px"
                            width="120px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $record->name }}</h5>
                            <h6 class="card-title">{{ $record->position->name }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Details Section -->
    <x-footer-lp />
</x-root-lp>
