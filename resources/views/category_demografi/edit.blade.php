@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('category-demografi.update', $record->id) }}" method="post">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="nama">{{__('Nama')}}</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="1945" autocomplete="off" value="{{ $record->nama ?? old('nama') }}">
                    @error('nama')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="keterangan">{{__('Keterangan')}}</label>
                  <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" placeholder="Perempuan" autocomplete="off" value="{{ $record->keterangan ?? old('keterangan') }}">
                  @error('keterangan')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>


                <button type="submit" class="btn btn-primary">{{__('Simpan')}}</button>
                <a href="{{ route('demografi.index') }}" class="btn btn-default">{{__('Kembali')}}</a>

            </form>
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
