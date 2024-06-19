@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('tugas.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">{{__('Tugas')}}</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama Tugas yang dilakukan" autocomplete="off" value="{{ old('name') }}">
                    @error('name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="description">{{__('Deskripsi')}}</label>
                  <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Deskripsi tugas yang dilakukan " autocomplete="off" value="{{ old('description') }}">
                  @error('description')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{__('Simpan')}}</button>
                <a href="{{ route('category-demografi.index') }}" class="btn btn-default">{{__('Kembali')}}</a>

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

