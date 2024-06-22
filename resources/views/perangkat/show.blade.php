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
                        <div class="form-group">
                            <label for="name">{{ __('Nama Lengkap') }}</label>
                            <input disabled type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Fulan" autocomplete="off" value="{{ old('name') ?? $record->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun">{{ __('Jenis Kelamin') }}</label>
                            <div class="row mt-1">
                                <div class="col-sm-6 col-md-3 col-lg-2">
                                    <div class="radio">
                                        <input disabled type="radio" name="gender" id="optionsRadios1" value="Laki-laki"
                                            {{ $record->gender == 'Laki-laki' ? 'checked' : '' }}>
                                        <label for="optionsRadios1">{{ __('Laki-laki') }}</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 col-lg-2">
                                    <div class="radio">
                                        <input disabled type="radio" name="gender" id="optionsRadios2" value="Perempuan"
                                            {{ $record->gender == 'Perempuan' ? 'checked' : '' }}>
                                        <label for="optionsRadios2">{{ __('Perempuan') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('Nomor Telepon') }}</label>
                            <input disabled type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                id="phone" placeholder="0000-0000-0000" autocomplete="off"
                                value="{{ old('phone') ?? $record->phone }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nip">{{ __('Nip') }}</label>
                            <input disabled type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
                                id="nip" placeholder="000111" autocomplete="off" value="{{ old('nip') ?? $record->nip }}">
                            @error('nip')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="position_id">{{ __('Jabatan') }}</label>
                            <select disabled name="position_id" id="position_id" name="position_id" class="form-control">
                                <option value="" selected>-- Pilih --</option>
                                @foreach ($positions as $item)
                                <option value="{{$item->id}}" {{$record->position_id == $item->id ?? old('position_id') ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                            @error('position_id')
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

                        {{-- <input disabled type="text" name="photo" value="{{$record->photo}}"> --}}

                        <div class="form-group">
                            <label for="status">{{ __('Status Kepegawaian') }}</label>
                            <select disabled name="status" id="status" class="form-control">
                                <option value="" selected>-- Pilih --</option>
                                <option value="Aktif" {{ ($record->status ?? old('status')) =='Aktif' ? 'selected' : '' }}>Aktif
                                </option>
                                <option value="Nonaktif" {{($record->status ?? old('status')) ==  'Nonaktif' ? 'selected' : '' }}>
                                    Nonaktif</option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea disabled name="address" id="" cols="30" rows="10" class="form-control">{{ $record->address ?? old('address') }}</textarea>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <a href="{{ route('perangkat.index') }}" class="btn btn-default">{{ __('Kembali') }}</a>


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
