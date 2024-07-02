<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/adminStyle.css') }}">

    {{-- Asset CSS Datatable  --}}
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">

    <!-- Favicon -->
    <link href="{{ asset('img/jabar.png') }}" rel="icon" type="image/png">

    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    {{-- Asset JS Datatable --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script defer src="{{ asset('js/dataTables.js') }}"></script>
    <script defer src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
    <script defer src="{{ asset('js/script.js') }}"></script>

    {{-- asset JS --}}
    <link rel="stylesheet" href="{{ asset('js/main.js') }}">

    @stack('css')
</head>

<body id="page-top">
    @include('sweetalert::alert')

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center my-4" href="{{ route('home') }}">
                <div class="sidebar-brand-icon">
                    <img class="img-fluid" width="100" height="60" src="{{ asset('assets/img/logo_1.png') }}"
                        alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Hegarmanah</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Nav::isRoute('home') }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Laman Utama') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                {{ __('Data Master') }}
            </div>

            <li class="nav-item {{ Nav::isRoute('users.index') }}">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>{{ __('Pengguna') }}</span></a>
            </li>
            <li class="nav-item {{ Nav::isRoute('banner.index') }}">
                <a class="nav-link" href="{{ route('banner.index') }}">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Banner</span>
                </a>
            </li>
            <li class="nav-item {{ Nav::isRoute('informasi.index') }}">
                <a class="nav-link" href="{{ route('informasi.index') }}">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Informasi Publik</span>
                </a>
            </li>
            <li class="nav-item {{ Nav::isRoute('profile-desa.index') }}">
                <a class="nav-link" href="{{ route('profile-desa.index') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Profil Desa</span>
                </a>
            </li>
            <li class="nav-item {{ Nav::isRoute('Article') }}">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsetwo"
                    aria-expanded="false" aria-controls="collapsetwo">
                    <i class="fas fa-fw fa-map"></i>
                    <span>{{ __('Artikel') }}</span>
                </a>
                <div id="collapsetwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="collapse-inner rounded bg-white py-2">
                        <a class="collapse-item" href="{{ route('data.event') }}">
                            <i class="fas fa-fw fa-calendar"></i>
                            <span>{{ __('Acara') }}</span>
                        </a>
                        <a class="collapse-item" href="{{ route('data.news') }}">
                            <i class="fas fa-fw fa-newspaper"></i>
                            <span>{{ __('Berita') }}</span>
                        </a>
                    </div>
                </div>
            </li>
            <!-- Nav Item -->

            <li class="nav-item {{ Nav::isRoute('perangkat.index') }}">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Perangkat Desa</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"
                    style="">
                    <div class="collapse-inner rounded bg-white py-2">
                        <a class="collapse-item" href="{{ route('perangkat.index') }}">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>{{ __('Petugas') }}</span>
                        </a>
                        <a class="collapse-item" href="{{ route('jabatan.index') }}">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>{{ __('Jabatan') }}</span>
                        </a>
                        <a class="collapse-item" href="{{ route('tugas.index') }}">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>{{ __('Tugas') }}</span>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item {{ Nav::isRoute('geografis.index') }}">
                <a class="nav-link" href="{{ route('geografis.index') }}">
                    <i class="fas fa-fw fa-building"></i>
                    <span>{{ __('Geografis') }}</span></a>
            </li>
            <li class="nav-item {{ Nav::isRoute('demografi.index') }}">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="false" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-map"></i>
                    <span>Demografi</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"
                    style="">
                    <div class="collapse-inner rounded bg-white py-2">
                        <a class="collapse-item" href="{{ route('demografi.index') }}">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>{{ __('Demografi') }}</span>
                        </a>
                        <a class="collapse-item" href="{{ route('category-demografi.index') }}">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>{{ __('Kategori Demografi') }}</span>
                        </a>

                    </div>
                </div>
            </li>


            <li class="nav-item {{ Nav::isRoute('structure.index') }}">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseEleven"
                    aria-expanded="false" aria-controls="collapseEleven">
                    <i class="fas fa-fw fa-sitemap"></i>
                    <span>{{ __('Struktur Organisasi') }}</span>
                </a>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar" style="">
                    <div class="collapse-inner rounded bg-white py-2">
                        <a class="collapse-item" href="{{ route('kades.index') }}">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>{{ __('Kepala Desa') }}</span>
                        </a>
                        <a class="collapse-item" href="{{ route('sekertaris.index') }}">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>{{ __('Sekertaris') }}</span>
                        </a>
                        <a class="collapse-item" href="{{ route('kaur.index') }}">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>{{ __('Kepala Urusan') }}</span>
                        </a>
                        <a class="collapse-item" href="{{ route('kasi.index') }}">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>{{ __('Kepala Seksi') }}</span>
                        </a>
                        <a class="collapse-item" href="{{ route('staf.index') }}">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>{{ __('Staf') }}</span>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item {{ Nav::isRoute('lembaga.index') }}">
                <a class="nav-link" href="{{ route('lembaga.index') }}">
                    <i class="fas fa-fw fa-handshake"></i>
                    <span>{{ __('Lembaga') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar static-top mb-4 bg-white shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="d-none d-lg-inline small mr-2 text-gray-600">{{ Auth::user()->name }}</span>
                                <figure class="img-profile rounded-circle avatar font-weight-bold"
                                    data-initial="{{ Auth::user()->name[0] }}"></figure>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right animated--grow-in shadow"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Profile') }}
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    {{-- Modal Konfirmasi Delete --}}
                    <div id="DeleteModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <form action="" id="deleteForm" method="post">
                                @csrf
                                @method('delete')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-center">Konfirmasi</h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center">Apakah kamu yakin ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">
                                            Cancel</button>
                                        <button type="submit" class="btn btn-danger" data-dismiss="modal">
                                            Ya, Hapus</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- End Modal --}}
                    @stack('notif')
                    @yield('main-content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Alejandro RH 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <a class="btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    @stack('js')

    {{-- CKEditor --}}
    <script>
        CKEDITOR.replace('detail_content');
        CKEDITOR.replace('about_us');
        CKEDITOR.replace('content_visi');
        CKEDITOR.replace('content_misi');
        CKEDITOR.replace('sejarah');
        CKEDITOR.replace('alamat');
    </script>
</body>

</html>
