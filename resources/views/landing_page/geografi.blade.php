<x-root-lp>
    <x-navbar-lp />
    <!-- HEADER IMAGE -->
    <header id="geografi-header" class="header-image d-none d-md-block text-white">
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
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6 order-md-2 mb-3" data-aos="fade-left">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43402.70622949173!2d106.78946238414318!3d-6.926033606711491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6830d1c4732cc5%3A0x14e9fd7726ffb468!2sHegarmanah%2C%20Kec.%20Cicantayan%2C%20Kabupaten%20Sukabumi%2C%20Jawa%20Barat!5e1!3m2!1sid!2sid!4v1719209176352!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 order-md-1 order-2 mt-1" data-aos="fade-up">
                    <h3>Geografi Desa Hegarmanah</h3>
                    <p>
                        {{ $record->description ?? '' }}
                    </p>
                    <table>
                        <tr>
                            <td style="width:150px;">
                                Nama Desa
                            </td>
                            <td style="width: 20px;">
                                :
                            </td>
                            <td>
                                {{ $record->name ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td style="width:150px;">
                                Koordinat
                            </td>
                            <td style="width: 20px;">
                                :
                            </td>
                            <td>
                                {{ $record->koordinat ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td style="width:150px;">
                                Luas Wilayah
                            </td>
                            <td style="width: 20px;">
                                :
                            </td>
                            <td>
                                {{ $record->luas ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td style="width:150px;">
                                Batas Utara
                            </td>
                            <td style="width: 20px;">
                                :
                            </td>
                            <td>
                                {{ $record->utara ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td style="width:150px;">
                                Batas Selatan
                            </td>
                            <td style="width: 20px;">
                                :
                            </td>
                            <td>
                                {{ $record->selatan ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td style="width:150px;">
                                Batas Barat
                            </td>
                            <td style="width: 20px;">
                                :
                            </td>
                            <td>
                                {{ $record->barat ?? '-' }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- End Details Section -->
    <x-footer-lp />
    </section>
</x-root-lp>
