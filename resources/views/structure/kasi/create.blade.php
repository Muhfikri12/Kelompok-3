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
                    <form action="{{ route('kasi.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="staff_id">{{ __('Petugas') }}</label>
                            <select name="staff_id" id="staff_id" class="form-control" name="staff_id">
                                <option value="" selected>-- Pilih --</option>
                                @foreach ($staf as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == old('staff_id') ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('staff_id')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">{{ __('Nama Struktur') }}</label>
                            <input type="text" name="name" class="form-control" id="form-control"
                                @error('name') is-invalid @enderror" name="name" id="name" placeholder="Staff"
                                autocomplete="off" value="{{ old('name') }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                        </div>

                        <div class="form-group">
                            <label for="parent_id">{{ __('Pimpinan') }}</label>
                            <select name="parent_id" id="parent_id" class="form-control" name="parent_id">
                                <option value="" selected>-- Pilih --</option>
                                @foreach ($positions as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == old('parent_id') ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('parent_id')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                        <a href="{{ route('kasi.index') }}" class="btn btn-default">{{ __('Kembali') }}</a>

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
