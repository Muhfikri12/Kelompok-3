<header id="header" class="fixed-top header-transparent bg-primary">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h4><strong><a href="{{ route('landing_page') }}" class="text-light">Desa Hegarmanah</a></strong></h4>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="{{ request()->is('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}">Tentang
                        Kami</a></li>
                <li><a class="{{ request()->is('visi-misi') ? 'active' : '' }}" href="{{ route('visi-misi') }}">Visi &
                        Misi</a></li>
                <li><a class="{{ request()->is('sejarah') ? 'active' : '' }}" href="{{ route('sejarah') }}">Sejarah</a>
                </li>
                <li><a class="{{ request()->is('demografi') ? 'active' : '' }}"
                        href="{{ route('data-demografi') }}">Demografi</a></li>
                <li><a class="{{ request()->is('data-geografi') ? 'active' : '' }}"
                        href="{{ route('data-geografi') }}">Geografi</a></li>
                <li><a class="{{ request()->is('petugas') ? 'active' : '' }}" href="{{ route('petugas') }}">Perangkat
                        Desa</a></li>
                <li><a class="{{ request()->is('struktur') ? 'active' : '' }}" href="{{ route('struktur') }}">Struktur
                        Organisasi</a></li>
                <li><a class="{{ request()->is('data-lembaga') ? 'active' : '' }}"
                        href="{{ route('data-lembaga') }}">Lembaga Desa</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
