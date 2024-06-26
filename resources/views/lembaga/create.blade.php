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
                    <form action="{{ route('lembaga.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Nama Lembaga') }}</label>
                            <input type="text" class="form-control" name="name"
                            placeholder="{{ __('Nama Lengkap Lembaga') }}" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">{{ __('Kategori Lembaga') }}</label>
                            <select name="type" id="type" class="form-control">
                                <option value="" selected>-- Pilih --</option>
                                <option value="BPD" {{ 'BPD' == old('type') ? 'selected' : '' }}>BPD</option>
                                <option value="LPM" {{ 'LPM' == old('type') ? 'selected' : '' }}>LPM</option>
                                <option value="KARTA" {{ 'KARTA' == old('type') ? 'selected' : '' }}>
                                    KARTA</option>
                                <option value="PKK" {{ 'PKK' == old('type') ? 'selected' : '' }}>PKK</option>
                                <option value="DLL" {{ 'DLL' == old('type') ? 'selected' : '' }}>Lainnnya</option>
                            </select>
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">{{ __('Alamat') }}</label>
                            <input type="text" class="form-control" name="address"
                                placeholder="{{ __('Alamat kantor Lembaga') }}" value="{{ old('name') }}">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="leader">{{ __('Nama Ketua') }}</label>
                            <input type="text" class="form-control" name="leader"
                                placeholder="{{ __('Nama Lengkap') }}" value="{{ old('name') }}">
                            @error('leader')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email Lembaga') }}</label>
                            <input type="email" class="form-control" name="email"
                                placeholder="{{ __('lembaga@mail.com') }}" value="{{ old('name') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('Telepon Kantor') }}</label>
                            <input type="string" class="form-control" name="phone"
                                placeholder="{{ __('Maksimal 13 Digit angka') }}" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="date">{{ __('Tanggal Didirikan') }}</label>
                            <input type="date" class="form-control" id="date" name="date"
                                placeholder="{{ __('Name') }}" value="{{ old('name') }}">
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Keterangan') }}</label>
                            <input type="text" class="form-control" name="description"
                                placeholder="{{ __('Name') }}" value="{{ old('name') }}">
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                        <a href="{{ route('lembaga.index') }}" class="btn btn-default">{{ __('Kembali') }}</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Main Content -->
@endsection

@push('js')
    <script>
            $('.date').datepicker({
       format: 'mm-dd-yyyy'
     });
    </script>
@endpush
