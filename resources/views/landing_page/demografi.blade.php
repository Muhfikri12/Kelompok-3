<x-root-lp>
    <x-navbar-lp />
    {{-- Section Deskripsi Demografi --}}
    <section id="details" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="{{ asset('assets/img/details-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Demografi Desa Hegarmanah</h3>
                    <p>
                        Gambaran Demografi merupakan gambaran kependudukan dalam arti luas terhadap perkembangan dan
                        persebarannya. Oleh karena itu jumlah penduduk yang besar merupakan modal dasar yang efektif
                        bagi pembangunan yang berkelanjutan. Jumlah penduduk yang besar dan berkualitas baik dengan
                        pertumbuhan yang teratur akan menjadi dasar dalam mencapai tujuan pembangunan.
                    </p>
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
                        @foreach ($results as $kategori => $years)
                            <div class="card mt-4">
                                <h5 class="card-title p-4">
                                    {{ strtoupper('Tabel Jumlah Penduduk berdasarkan ' . $kategori) }}
                                </h5>
                                <div class="card-body overflow-hidden p-2">
                                    <div class="w-full overflow-x-scroll">
                                        <table
                                            class="table-bordered table-stripped display nowrap datatable table w-full">
                                            <div class="px-2 bg-secondary overflow-x-scroll">
                                                <thead>
                                                    <tr class="table-secondary">
                                                        <th>{{ __('Tahun') }}</th>
                                                        <th>{{ strtoupper($kategori) }}</th>
                                                        <th>{{ __('Jumlah') }}</th>
                                                        <th>Prosentase</th>
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
        </main>
        <!-- End #main -->
        <x-footer-lp />
    </section>
</x-root-lp>
