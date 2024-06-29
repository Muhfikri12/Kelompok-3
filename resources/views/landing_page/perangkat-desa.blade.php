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
            <div style="display: flex; justify-content:center; padding: 3rem;">
                <div class="row row-cols g-4">
                    @foreach ($results as $record)
                        <div class="col-sm-6 col-md-6 col-lg-3" data-aos="zoom-in">
                            <div class="card text-center" style="height: 24rem; width: 18rem;">
                                <img src="{{ asset('storage/petugas/' . $record->photo) }}" class="card-img-top p-2"
                                    alt="Hollywood Sign on The Hill" style="width: 18rem; height: 15rem" />
                                <div class="card-body">
                                    <h5 class="card-title">{{ $record->name ?? '' }}</h5>
                                    <p class="card-text">
                                        {{ $record->position->name ?? '' }}
                                    </p>
                                    <a href="{{route('data-tugas',$record->id)}}" class="text-muted"><u>Tugas dan Fungsi</u></a>
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
