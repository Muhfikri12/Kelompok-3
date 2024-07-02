@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <div class="card">
        <div class="card-body">


            <div class="form-group">
                <label for="name">{{ __('Nama Lembaga') }}</label>
                <input disabled type="text" class="form-control" name="name"
                placeholder="{{ __('Nama Lengkap Lembaga') }}" value="{{ $record->name ?? old('name') }}" required autofocus>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">{{ __('Kategori Lembaga') }}</label>
                <select disabled name="type" id="type" class="form-control">
                    <option value="" selected>-- Pilih --</option>
                    <option value="BPD" {{ old('type') ?? $record->type == "BPD" ? 'selected' : '' }}>BPD</option>
                    <option value="LPM" {{ old('type') ?? $record->type == "LPM" ? 'selected' : '' }}>LPM</option>
                    <option value="TANI" {{ old('type') ?? $record->type == "TANI" ? 'selected' : '' }}>TANI</option>
                    <option value="KARTA" {{ old('type') ?? $record->type == "KARTA" ? 'selected' : '' }}>
                        KARTA</option>
                    <option value="PKK" {{ old('type') ?? $record->type == "PKK" ? 'selected' : '' }}>PKK</option>
                    <option value="DLL" {{ old('type') ?? $record->type == "DLL" ? 'selected' : '' }}>Lainnnya</option>
                </select>
                @error('type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="address">{{ __('Alamat') }}</label>
                <input disabled type="text" class="form-control" name="address"
                    placeholder="{{ __('Alamat kantor Lembaga') }}" value="{{ $record->address ?? old('address') }}">
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="leader">{{ __('Nama Ketua') }}</label>
                <input disabled type="text" class="form-control" name="leader"
                    placeholder="{{ __('Nama Lengkap') }}" value="{{ $record->leader ?? old('leader') }}">
                @error('leader')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">{{ __('Email Lembaga') }}</label>
                <input disabled type="email" class="form-control" name="email"
                    placeholder="{{ __('lembaga@mail.com') }}" value="{{ $record->email ?? old('email') }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone">{{ __('Telepon Kantor') }}</label>
                <input disabled type="string" class="form-control" name="phone"
                    placeholder="{{ __('Maksimal 13 Digit angka') }}" value="{{ $record->phone ?? old('phone') }}">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="date">{{ __('Tanggal Didirikan') }}</label>
                <input disabled type="date" class="form-control" id="date" name="date"
                    placeholder="{{ __('Name') }}" value="{{ $record->date ?? old('date') }}">
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">{{ __('Keterangan') }}</label>
                <input disabled type="text" class="form-control" name="description"
                    placeholder="{{ __('Name') }}" value="{{ $record->description ?? old('description') }}">
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


                    <a href="{{ route('lembaga.index') }}" class="btn btn-default">{{__('Kembali')}}</a>

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
