@push('css')
    <style>

/* HEADER IMAGE - Untuk selain halaman Home  */

.header-image {
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  height: 400px;
}

.header-overlay {
  background-color: rgba(0,0,0,0.2);
  width: 100%;
  height: 400px;
}

.header-image h1{
  margin-top:120px;
}

/* HEADER IMAGE - Gambar untuk setiap halaman  */

#blog-header{
  background-image: url('../img/full-image7.jpg');
  background-position-y: -200px;
}

#article-header{
  background-image: url('../img/full-image8.jpg');
  background-position-y: -200px;
}

#gallery-header{
  background-image: url('../img/demografi.jpg');
  background-position-y: -400px;
}

#login-header{
  background-image: url('../img/full-image10.jpg');
  background-position-y: -100px;
}
    </style>
@endpush
<x-root-lp>
    <x-navbar-lp />

    {{-- <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>Demografi</h1>
                        <p class="text-white">
                            Gambaran Demografi merupakan gambaran kependudukan dalam arti luas terhadap perkembangan dan
                            persebarannya. Oleh karena itu jumlah penduduk yang besar merupakan modal dasar yang efektif
                            bagi pembangunan yang berkelanjutan. Jumlah penduduk yang besar dan berkualitas baik dengan
                            pertumbuhan yang teratur akan menjadi dasar dalam mencapai tujuan pembangunan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section --> --}}

        <!-- HEADER IMAGE -->
        <header id="gallery-header" class="header-image text-white d-none d-md-block">
            <div class="header-overlay">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <h1 class="display-3">Demografi Desa Hegarmanah</h1>
                  </div>
                </div>
              </div>
            </div>
          </header>

    {{-- Section Deskripsi Demografi --}}
    <section id="details" class="details">
        <div class="container">

            <div class="row content">

                <div class="col-md-12" data-aos="fade-up">

                    @foreach ($results as $kategori => $years)
                    <div class="card mt-4">
                        <h5 class="card-title p-4 text-center">
                            {{ strtoupper('Tabel Jumlah Penduduk berdasarkan ' . $kategori) }}
                        </h5>
                        <div class="card-body overflow-hidden p-2">
                            <div class="w-full overflow-x-scroll">
                                <table
                                    class="table-bordered table-stripped display nowrap datatable table w-full">
                                    <div class="bg-secondary overflow-x-scroll px-2">
                                        <thead>
                                            <tr class="table-secondary">
                                                <th>{{ __('TAHUN') }}</th>
                                                <th>{{ strtoupper($kategori) }}</th>
                                                <th>{{ __('JUMLAH') }}</th>
                                                <th>PRESENTASE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($years as $year => $items)
                                                @foreach ($items as $item)
                                                    <tr>
                                                        <td>{{ $item->tahun ?? '-' }}</td>
                                                        <td>{{ $item->keterangan ?? '-' }}</td>
                                                        <td>{{ $item->total . ' ' . $item->satuan ?? '-' }}</td>
                                                        <td>{{ round(($item->total / $items->sum('total')) * 100, 2) . ' %' }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr class="table-secondary">
                                                    <td>{{ $year }}</td>
                                                    <td>Total</td>
                                                    <td>{{ $items->sum('total') . ' ' . $items->first()->satuan ?? '' }}
                                                    </td>
                                                    <td>100%</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- End Details Section -->

    <section class="details">
        <main id="main">
            <div id="demografi">
                <div class="demografi-newsletter">
                    <div class="container">

                    </div>
                </div>

            </div>
        </main>
        <!-- End #main -->
        <x-footer-lp />
    </section>
</x-root-lp>
