<x-root-lp>
    <x-navbar-lp />
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
        <x-footer-lp />
    </section><!-- End Details Section -->
    <!-- Vendor JS Files -->
</x-root-lp>
