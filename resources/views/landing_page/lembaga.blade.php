<x-root-lp>
    <x-navbar-lp />
    {{-- Section Deskripsi Demografi --}}

    <section id="features" class="features mt-5">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Daftar Lembaga Desa Hegarmanah Cicantayan</h2>
            </div>
            <div class="row">
                @foreach ($results as $record)
                <div class="col-md-4">
                    <div class="card m-2">
                        <div class="card-body">
                          <h5 class="card-title">{{$record->name ?? ''}}</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Details Section -->
    <x-footer-lp />
    </section>
</x-root-lp>
