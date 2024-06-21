<x-root-lp>
    <x-navbar-lp />
    <section id="details" class="details">
        <div class="container" style="margin-bottom: 3rem;">
            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/visi.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Sejarah</h3>
                    <p>
                        {{ $data->sejarah }}
                    </p>
                </div>
            </div>
        </div>
        <x-footer-lp />
    </section><!-- End Details Section -->
</x-root-lp>
