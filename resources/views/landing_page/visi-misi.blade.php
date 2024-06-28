<x-root-lp>
    <x-navbar-lp />
     <!-- HEADER IMAGE -->
     <header id="geografi-header" class="header-image d-none d-md-block text-white">
        <div class="header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-3">Visi Misi Desa Hegarmanah</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- END IMAGE --}}


    <section id="details" class="details">
        <div class="container" style="margin-bottom: 3rem;">
            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/visi.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    {!! $data->content_visi !!}
                </div>
            </div>
            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="assets/img/misi.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5" data-aos="fade-up">
                    {!! $data->content_misi !!}
                </div>
            </div>
        </div>
    </section>
        <x-footer-lp />
</x-root-lp>
