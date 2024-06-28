<x-root-lp>
    <x-navbar-lp />
          <!-- HEADER IMAGE -->
          <header id="geografi-header" class="header-image d-none d-md-block text-white">
            <div class="header-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="display-3">Lembaga Desa Hegarmanah</h1>
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
                <h2>Daftar Lembaga Desa Hegarmanah Cicantayan</h2>
            </div>
            <div class="row">
                @foreach ($results as $key => $item)
                <h5 class="my-3">Daftar Lembaga {{$key}}</h5>
                @foreach ($item as $record)
                <div class="col-md-4">
                    <div class="card m-2">
                        <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h5 class="card-title d-flex justify-content-start ">{{$record->name ?? ''}} </h5>
                                    <h5 class="card-title d-flex justify-content-end">{{$record->type ?? ''}} </h5>
                                </div>
                          <table style="font-size:16px; border-collapse:collapse; text-align:left; text-indent:2px;">
                            <tr>
                                <td>
                                    Ketua
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    {{$record->leader ?? "-"}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Telepon
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    {{$record->phone ?? "-"}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    {{$record->email ?? "-"}}
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top;">
                                    Alamat
                                </td>
                                <td style="vertical-align:top;">
                                    :
                                </td>
                                <td>
                                    {{$record->address ?? "-"}}
                                </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Details Section -->
    <x-footer-lp />
    </section>
</x-root-lp>
