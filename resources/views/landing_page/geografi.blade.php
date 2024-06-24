<x-root-lp>
    <x-navbar-lp />
    {{-- Section Deskripsi Demografi --}}
    <section id="details" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-4 mt-2 order-1 order-md-2" data-aos="fade-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43402.70622949173!2d106.78946238414318!3d-6.926033606711491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6830d1c4732cc5%3A0x14e9fd7726ffb468!2sHegarmanah%2C%20Kec.%20Cicantayan%2C%20Kabupaten%20Sukabumi%2C%20Jawa%20Barat!5e1!3m2!1sid!2sid!4v1719209176352!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Geografi Desa Hegarmanah</h3>
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
        </main>
        <!-- End #main -->
        <x-footer-lp />
    </section>
</x-root-lp>
