@extends('layouts.admin')

@section('main-content')
    @include('sweetalert::alert')

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

    <form action="{{ route('profile-desa.store') }}" method="post">
        @csrf
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-3">

                <!-- Project Card Example -->
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <label for="about_us" class="m-0 font-weight-bold text-primary">Tentang Kami</label>
                    </div>
                    <div class="card-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Tambahkan deskripsi disini" id="about_us"
                                style="min-height: 100px;text-align:left;" name="about_us">{{ $data->about_us }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <label for="content_visi" class="m-0 font-weight-bold text-primary">Visi</label>
                    </div>
                    <div class="card-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Tambahkan deskripsi disini" id="content_visi"
                                style="min-height: 100px;text-align:left;" name="content_visi">{{ $data->content_visi }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <label for="content_misi" class="m-0 font-weight-bold text-primary">Misi</label>
                    </div>
                    <div class="card-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Tambahkan deskripsi disini" id="content_misi"
                                style="min-height: 100px;text-align:left;" name="content_misi">{{ $data->content_misi }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <label for="sejarah" class="m-0 font-weight-bold text-primary">Sejarah</label>
                    </div>
                    <div class="card-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Tambahkan deskripsi disini" id="sejarah"
                                style="min-height: 100px;text-align:left;" name="sejarah">{{ $data->sejarah }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <label for="alamat" class="m-0 font-weight-bold text-primary">Alamat</label>
                    </div>
                    <div class="card-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Tambahkan deskripsi disini" id="alamat"
                                style="min-height: 100px;text-align:left;" name="alamat">{{ $data->alamat }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Sosial Media</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex gap-1 flex-column">
                            <p style="display: flex; flex-direction: column;gap: 3;">
                                <label for="yt-link" class="m-0 font-weight-bold">Youtube</label>
                                <input type="text" value="{{ $data->yt_link ?: '-' }}"
                                    placeholder="https://www.youtube.com/@username" class="form-control my-2" id="yt-link"
                                    name="yt_link" />
                            </p>
                            <p style="display: flex; flex-direction: column;gap: 3;">
                                <label for="fb-link" class="m-0 font-weight-bold">Facebook</label>
                                <input type="text" value="{{ $data->fb_link ?: '-' }}"
                                    placeholder="https://web.facebook.com/username" class="form-control my-2" id="fb-link"
                                    name="fb_link" />
                            </p>
                            <p style="display: flex;">
                                <label for="wa-link" class="m-0 font-weight-bold">WhatsApp</label>
                            <div class="d-flex align-items-center">
                                <div>
                                    <span class="form-control d-flex align-items-center ">+62</span>
                                </div>
                                <input type="text"
                                    value="{{ str_replace('https://wa.me/+62', '', $data->wa_link) ?: '-' }}"
                                    placeholder="Nomor Telepon" class="form-control my-2" id="wa-link"
                                    name="wa_link" />
                            </div>
                            @if ($errors->has('wa_link'))
                                <span class="text-danger">
                                    {{ $errors->first('wa_link') }}
                                </span>
                            @endif
                            </p>
                            <p style="display: flex; flex-direction: column;gap: 3;">
                                <label for="ig-link" class="m-0 font-weight-bold">Instagram</label>
                                <input type="text" value="{{ $data->ig_link ?: '-' }}"
                                    placeholder="https://www.instagram.com/username" class="form-control my-2"
                                    id="ig-link" name="ig_link" />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
            <a href="{{ route('home') }}" class="btn btn-default">{{ __('Kembali') }}</a>
        </div>
    </form>
@endsection
