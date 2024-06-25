@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profil') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-3">

            <!-- Project Card Example -->
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">[Nama Desa]</h6>
                </div>
                <div class="card-body">
                    {{ $data->about_us }}
                </div>
            </div>
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Visi</h6>
                </div>
                <div class="card-body">
                    {{ $data->content_visi }}
                </div>
            </div>
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Misi</h6>
                </div>
                <div class="card-body">
                    {{ $data->content_misi }}
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-3">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Alamat</h6>
                </div>
                <div class="card-body">
                    {{ $data->alamat }}
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Sosial Media</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex gap-1 flex-column">
                        <p class="d-flex gap-3">
                        <h6 class="m-0 font-weight-bold">Youtube</h6>
                        <span>{{ $data->yt_link ?: '-' }}</span>
                        </p>
                        <p class="d-flex gap-3">
                        <h6 class="m-0 font-weight-bold">Facebook</h6>
                        <span>{{ $data->fb_link ?: '-' }}</span>
                        </p>
                        <p class="d-flex gap-3">
                        <h6 class="m-0 font-weight-bold">WhatsApp</h6>
                        <span>{{ $data->wa_link ?: '-' }}</span>
                        </p>
                        <p class="d-flex gap-3">
                        <h6 class="m-0 font-weight-bold">Instagram</h6>
                        <span>{{ $data->ig_link ?: '-' }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
