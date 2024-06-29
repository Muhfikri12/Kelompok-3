<x-root-lp>
    <x-navbar-lp />
      <!-- HEADER IMAGE -->
      <header id="geografi-header" class="header-image d-none d-md-block text-white">
        <div class="header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-3">Tugas Dan Fungsi</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- END IMAGE --}}
    {{-- Section Deskripsi Demografi --}}
    <section id="features" class="features mt-5">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>{{$record->position->name ?? ''}}</h2>
            </div>

            <div class="d-flex justify-content-center">
                <div class="card text-center" style="height: 22rem; width: 18rem;">
                    <img src="{{ asset('storage/petugas/' . $record->photo) }}" class="card-img-top p-2"
                        alt="Hollywood Sign on The Hill" style="width: 18rem; height: 15rem" />
                    <div class="card-body">
                        <h5 class="card-title">{{ $record->name ?? '' }}</h5>
                        <p class="card-text">
                            {{ $record->position->name ?? '' }}
                        </p>

                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <p>
                    <b>
                        Fungsi dan Tugas :
                    </b>
                </p>
                <div class="col">
                  <ol>
                    @foreach ($record->position->tasks as $item)
                        <li>{{$item->name ?? ''}}</li>
                    @endforeach
                  </ol>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col" data-aos="zoom-in">
                    <div class="card d-flex justify-content-center" style="height: 24rem; width: 18rem;">
                        <img src="{{ asset('storage/petugas/' . $record->photo) }}" class="card-img-top p-2"
                            alt="Hollywood Sign on The Hill" style="width: 18rem; height: 15rem" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $record->name ?? '' }}</h5>
                            <p class="card-text">
                                {{ $record->position->name ?? '' }}
                            </p>

                        </div>
                    </div>
                </div>
            </div> --}}
    </section>

    <!-- End Details Section -->
    <x-footer-lp />
</x-root-lp>
