@extends('layouts.admin')

@section('main-content')
<div class="row">
    <div class="col">
        <div class="card mb-4 shadow">
            <div class="card-header py-3">
                <h3 class="font-weight-bold text-primary m-0">{{ $title ?? __('Blank Page') }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('informasi.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="judul">{{ __('Judul') }}</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                            id="judul" placeholder="Judul Kegiatan yang dilakukan" autocomplete="off" value="{{ old('judul') }}">
                        @error('judul')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">{{ __('Keterangan') }}</label>
                        <textarea class="form-control" placeholder="Tambahkan deskripsi disini" id="about_us"
                        style="min-height: 100px;text-align:left;" name="description"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                    <a href="{{ route('informasi.index') }}" class="btn btn-default">{{ __('Kembali') }}</a>

                </form>
            </div>
        </div>
    </div>
</div>
    <!-- End of Main Content -->
@endsection
