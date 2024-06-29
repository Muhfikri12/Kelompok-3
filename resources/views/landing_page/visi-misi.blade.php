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
        <div class="container" style="display:flex;align-content:center;flex-direction:column;align-items:center;">
            <div class="row content" style="width:100%;overflow:hidden;">
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    {!! $data->content_visi !!}
                </div>
            </div>
            <div class="row content" style="width:100%;overflow:hidden;margin-bottom:3rem;">
                <div class="col-md-8 pt-5" data-aos="fade-up">
                    {!! $data->content_misi !!}
                </div>
            </div>
        </div>
    </section>
    <x-footer-lp />
</x-root-lp>
