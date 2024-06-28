
    <!-- Services Start -->
    <div class="container-fluid service py-2">
        <div class="container py-2">
            <div class="header-article-event my-3" data-aos="fade-up" style="text-color:#000;">
                <h4>Informasi Desa</h4>
            </div>
            <div class="row">
                <!-- Card Sejarah -->
                <div class="col-lg-3 col-md-6" data-aos="fade-right">
                  <a href="{{ route('sejarah') }}" target="_blank" class="text-decoration-none">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-landmark icon text-primary"></i>
                        <h5 class="card-title">Sejarah Desa</h5>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- Card Perangkat Desa -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up-right">
                  <a href="{{ route('petugas') }}"  target="_blank" class="text-decoration-none">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-users icon text-danger"></i>
                        <h5 class="card-title">Perangkat Desa</h5>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- Card Demografi -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up-left">
                  <a href="{{ route('data-demografi') }}" target="_blank" class="text-decoration-none">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-chart-line icon text-success"></i>
                        <h5 class="card-title">Demografi</h5>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- Card Geografi -->
                <div class="col-lg-3 col-md-6" data-aos="fade-left">
                  <a href="{{ route('data-geografi') }}" target="_blank" class="text-decoration-none">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-map icon text-info"></i>
                        <h5 class="card-title">Geografi</h5>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
        </div>
    </div>
    <!-- Services End -->

<div class="container-xxl py-6 " id="article">
    <div class="container">
        <div class="header-article-event mb-3" data-aos="fade-up" style="text-color:#000;">
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
