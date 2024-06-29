<header id="header" class="fixed-top">
    <div class="d-flex align-items-center justify-content-between container">

        <div class="logo">
            <h4 "><strong><a class="text-light" href="{{ route('landing_page') }}">Desa Hegarmanah</a></strong></h4>
        </div>
        <nav id="navbar" class="navbar">
            <ul>

                <li class="dropdown"><a href="#"><span>Profile Desa</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="{{ request()->is('about-us') ? 'active' : '' }}"
                                href="{{ route('about-us') }}">Tentang
                                Kami</a></li>
                        <li><a class="{{ request()->is('visi-misi') ? 'active' : '' }}"
                                href="{{ route('visi-misi') }}">Visi &
                                Misi</a></li>
                        <li><a class="{{ request()->is('sejarah') ? 'active' : '' }}"
                                href="{{ route('sejarah') }}">Sejarah</a>
                        </li>
                        <li><a class="{{ request()->is('data-demografi') ? 'active' : '' }}"
                                href="{{ route('data-demografi') }}">Demografi</a></li>
                        <li><a class="{{ request()->is('data-geografi') ? 'active' : '' }}"
                                href="{{ route('data-geografi') }}">Geografi</a></li>
                    </ul>
                </li>
                <li><a class="{{ request()->is('petugas') ? 'active' : '' }}" href="{{ route('petugas') }}">Perangkat
                        Desa</a></li>
                <li><a class="{{ request()->is('struktur') ? 'active' : '' }}" href="{{ route('struktur') }}">Struktur
                        Organisasi</a></li>
                <li><a class="{{ request()->is('data-lembaga') ? 'active' : '' }}"
                        href="{{ route('data-lembaga') }}">Lembaga Desa</a></li>


            </ul>
            <i class="text-light bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
