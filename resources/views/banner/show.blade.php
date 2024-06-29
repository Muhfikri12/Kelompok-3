@extends('layouts.admin')

@section('main-content')
    <!-- Main Content goes here -->
    <div class="row">
        <div class="col">
            <div class="card mb-4 shadow">
                <div class="card-header py-3">
                    <h3 class="font-weight-bold text-primary m-0">{{ $title ?? __('Blank Page') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('banner.update', $record->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="judul">{{ __('Judul') }}</label>
                            <input disabled type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                id="judul"  autocomplete="off"
                                value="{{$record->judul ?? old('judul')  }}">
                            @error('judul')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Keterangan Banner') }}</label>
                            <input disabled type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                                id="description" placeholder="Keterangan Kegiatan" autocomplete="off" value="{{ $record->description ?? old('description') }}">
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="photo">{{ __('Photo Profile') }}</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input disabled type="text">
                                    <input disabled type="file" class="custom-file-input @error('photo') is-invalid @enderror" name="photo" id="photo"
                                    aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="photo"> {{ $record->photo }}</label>
                                </div>
                            </div>
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                            <a href="{{ route('banner.index') }}" class="btn btn-default">{{ __('Kembali') }}</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Main Content -->
@endsection

@push('notif')
    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('warning'))
        <div class="alert alert-warning border-left-warning alert-dismissible fade show" role="alert">
            {{ session('warning') }}
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
@endpush
