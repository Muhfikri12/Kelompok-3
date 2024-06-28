<x-root-lp>
    <x-navbar-lp />
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg mt-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>Visi Misi</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->


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
        <x-footer-lp />
    </section><!-- End Details Section -->
    <!-- Vendor JS Files -->
</x-root-lp>
