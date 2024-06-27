@extends('layouts.admin')

@section('main-content')
<div class="row">
    <div class="col">
        <div class="card mb-4 shadow">
            <div class="card-header py-3">
                <h3 class="font-weight-bold text-primary m-0">{{ $title ?? __('Blank Page') }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('perangkat.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">{{ __('Nama Lengkap') }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Fulan" autocomplete="off" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">{{ __('Nomor Telepon') }}</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                            id="phone" placeholder="089123123123" autocomplete="off" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nip">{{ __('Nip') }}</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
                            id="nip" placeholder="8 Angka" autocomplete="off" value="{{ old('nip') }}">
                        @error('nip')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gender">{{ __('Jenis Kelamin') }}</label>
                        <div class="row mt-1">
                            <div class="col-sm-6 col-md-3 col-lg-2">
                                <div class="radio">
                                    <input type="radio" name="gender" id="optionsRadios1" value="Laki-laki"
                                        {{ old('gender') == 'Laki-laki' ? 'checked' : '' }}>
                                    <label for="optionsRadios1">{{ __('Laki-laki') }}</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-2">
                                <div class="radio">
                                    <input type="radio" name="gender" id="optionsRadios2" value="Perempuan"
                                        {{ old('gender') == 'Perempuan' ? 'checked' : '' }}>
                                    <label for="optionsRadios2">{{ __('Perempuan') }}</label>
                                </div>
                            </div>
                        </div>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="position_id">{{ __('Jabatan') }}</label>
                        <select name="position_id" id="position_id" name="position_id" class="form-control">
                            <option value="" selected>-- Pilih --</option>
                            @foreach ($positions as $item)
                            <option value="{{$item->id}}" {{old('position_id') ? 'selected' : ''}}>{{$item->name}}</option>
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
                                <input type="file" class="custom-file-input @error('photo') is-invalid @enderror"
                                    name="photo" id="photo" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="photo"> File</label>
                            </div>
                        </div>
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">{{ __('Status Kepegawaian') }}</label>
                        <select name="status" id="status" class="form-control">
                            <option value="" selected>-- Pilih --</option>
                            <option value="Aktif" {{ 'Aktif' == old('status') ? 'selected' : '' }}>Aktif</option>
                            <option value="Nonaktif" {{ 'Nonaktif' == old('status') ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="total">Alamat</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        @error('total')
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
