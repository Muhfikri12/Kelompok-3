<header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="index.html">[Nama Desa]</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
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
                        href="{{ route('demografi') }}">Demografi</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
