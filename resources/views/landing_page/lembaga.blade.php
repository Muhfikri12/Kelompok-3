@push('css')
    <style>
        .header-image {
            background-repeat: no-repeat;

        }
            .breadcrumb-text h1 {
                font-size: 50px;
                font-weight: 900;
                color: #fff;
                margin: 0;
                margin-top: 20px;
            }

            .breadcrumb-section {
                padding: 150px 0;
                background-size: cover;
                background-position: center center;
                position: relative;
                z-index: 1;
                background-image: url("../img/dp.jpg");
                background-position-y: -200px;
                background-attachment: fixed;
                padding-top: 200px;
            }

            .header-overlay {
                background-color: rgba(0, 0, 0, 0.2);
                width: 100%;
                height: 400px;
            }

            .header-image h1 {
                margin-top: 120px;
            }

            /* HEADER IMAGE - Gambar untuk setiap halaman  */

            #blog-header {
                background-image: url("../img/full-image7.jpg");
                background-position-y: -200px;
            }

            #article-header {
                background-image: url("../img/full-image8.jpg");
                background-position-y: -200px;
            }

            #demografi-header {
                background-image: url(/asset-page/demografi.jpg);
                background-position-y: -400px;
            }

            #geografi-header {
                background-image: url(/asset-page/about.jpg);
                background-position-y: -400px;
            }

    </style>
@endpush
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
