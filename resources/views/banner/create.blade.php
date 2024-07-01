@extends('layouts.admin')

@section('main-content')
<div class="row">
    <div class="col">
        <div class="card mb-4 shadow">
            <div class="card-header py-3">
                <h3 class="font-weight-bold text-primary m-0">{{ $title ?? __('Blank Page') }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="judul">{{ __('Judul Banner') }}</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                            id="judul" placeholder="Judul Kegiatan yang dilakukan" autocomplete="off" value="{{ old('judul') }}">
                        @error('judul')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">{{ __('Keterangan Banner') }}</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="photo">{{ __('Poto') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('photo') is-invalid @enderror"
                                    name="photo" id="photo" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="photo"> File</label>
                            </div>
                        </div>
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                    <a href="{{ route('demografi.index') }}" class="btn btn-default">{{ __('Kembali') }}</a>

                </form>
            </div>
        </div>
    </div>
</div>
    <!-- End of Main Content -->
@endsection
