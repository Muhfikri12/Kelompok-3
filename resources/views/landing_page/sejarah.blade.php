<x-root-lp>
    <x-navbar-lp />
    <!-- HEADER IMAGE -->
    <header id="geografi-header" class="header-image text-white">
        <div class="header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-3">Sejarah Desa Hegarmanah</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- END IMAGE --}}


    <section id="details" class="details">
        <div class="container"
            style="display:flex;align-content:center;flex-direction:column;align-items:center;margin-bottom:3rem;">
            <div class="row content lg-screen" style="overflow:hidden;">
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    {!! $data->sejarah !!}
                </div>
            </div>
        </div>
    </section>
    <x-footer-lp />
</x-root-lp>
