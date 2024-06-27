@if (request()->is('data-geografi') == 'active' || request()->is('struktur') == 'active' || request()->is('sejarah') == 'active')
<div class="fixed-bottom py-4">
    <div class="container">
        <div class="row">
            <h3>Jejaring Sosial Kami</h3>
            <p>Kami mengundang Anda untuk terhubung dengan Desa [Nama Desa] melalui jejaring sosial.
                Dapatkan informasi terbaru, berita terkini, dan acara menarik langsung dari desa kami. Ikuti
                dan bergabunglah dengan komunitas online kami di platform berikut:
            </p>
            <div class="social-links mt-3">
                <a href="{{ $data->yt_link }}" class="{{ $data->yt_link ? 'youtube' : 'd-none' }}">
                    <i class="bx bxl-youtube rounded"></i>
                </a>
                <a href="{{ $data->ig_link }}" class="{{ $data->ig_link ? 'instagram' : 'd-none' }}">
                    <i class="bx bxl-instagram rounded"></i>
                </a>
                <a href="{{ $data->fb_link }}" class="{{ $data->fb_link ? 'facebook' : 'd-none' }}">
                    <i class="bx bxl-facebook rounded"></i>
                </a>
                <a href="{{ $data->wa_link }}" class="{{ $data->wa_link ? 'whatsapp' : 'd-none' }}">
                    <i class="bx bxl-whatsapp rounded"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@else
<div class="footer-top py-4">
    <div class="container">
        <div class="row">
            <h3>Jejaring Sosial Kami</h3>
            <p>Kami mengundang Anda untuk terhubung dengan Desa [Nama Desa] melalui jejaring sosial.
                Dapatkan informasi terbaru, berita terkini, dan acara menarik langsung dari desa kami. Ikuti
                dan bergabunglah dengan komunitas online kami di platform berikut:
            </p>
            <div class="social-links mt-3">
                <a href="{{ $data->yt_link }}" class="{{ $data->yt_link ? 'youtube' : 'd-none' }}">
                    <i class="bx bxl-youtube rounded"></i>
                </a>
                <a href="{{ $data->ig_link }}" class="{{ $data->ig_link ? 'instagram' : 'd-none' }}">
                    <i class="bx bxl-instagram rounded"></i>
                </a>
                <a href="{{ $data->fb_link }}" class="{{ $data->fb_link ? 'facebook' : 'd-none' }}">
                    <i class="bx bxl-facebook rounded"></i>
                </a>
                <a href="{{ $data->wa_link }}" class="{{ $data->wa_link ? 'whatsapp' : 'd-none' }}">
                    <i class="bx bxl-whatsapp rounded"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endif

