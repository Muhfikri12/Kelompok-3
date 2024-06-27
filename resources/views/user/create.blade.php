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
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                          <label for="name">{{__('Nama')}}</label>
                          <input type="text" class="form-control form-control-user" name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}">
                          @error('name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{__('Email')}}</label>
                            <input type="email" class="form-control form-control-user" name="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}">
                            @error('email')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="password">{{__('Sandi')}}</label>
                            <input type="password" class="form-control form-control-user" name="password" placeholder="{{ __('Buat Kata sandi') }}">
                            @error('password')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="password">{{__('Konfirmasi Sandi')}}</label>
                            <input type="password" class="form-control form-control-user" name="password_confirmation" placeholder="{{ __('Ulangi Kata Sandi') }}">
                            @error('password')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                        <button type="submit" class="btn btn-primary">{{__('Simpan')}}</button>
                        <a href="{{ route('users.index') }}" class="btn btn-default">{{__('Kembali')}}</a>

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

