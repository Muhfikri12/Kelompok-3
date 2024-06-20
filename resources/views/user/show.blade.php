@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <div class="card">
        <div class="card-body">

                <div class="form-group">
                    <label for="name">{{__('Nama')}}</label>
                    <input type="text" disabled class="form-control form-control-user" name="name" placeholder="{{ __('Name') }}" value="{{ $record->name ?? old('name') }}" required autofocus>
                    @error('name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                      <label for="email">{{__('Email')}}</label>
                      <input type="email" disabled class="form-control form-control-user" name="email" placeholder="{{ __('Email') }}" value="{{ $record->email ?? old('email') }}" required autofocus>
                      @error('email')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="password">{{__('Sandi')}}</label>
                      <input type="password" disabled class="form-control form-control-user" name="password" placeholder="{{ __('Buat Kata sandi') }}" required autofocus>
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="password">{{__('Konfirmasi Sandi')}}</label>
                      <input type="password" disabled class="form-control form-control-user" name="password_confirmation" placeholder="{{ __('Ulangi Kata Sandi') }}" required autofocus>
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <a href="{{ route('users.index') }}" class="btn btn-default">{{__('Kembali')}}</a>

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
