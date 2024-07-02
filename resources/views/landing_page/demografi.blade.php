<x-root-lp>
    <x-navbar-lp />
    <!-- HEADER IMAGE -->
    <header id="geografi-header" class="header-image text-white">
        <div class="header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-3">Geografi Desa Hegarmanah</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- END IMAGE --}}

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
                                    <table class="table-bordered table-stripped display nowrap datatable table w-full">
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
    <x-footer-lp />
</x-root-lp>
