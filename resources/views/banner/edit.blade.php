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
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                id="judul"  autocomplete="off"
                                value="{{$record->judul ?? old('judul')  }}">
                            @error('judul')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Keterangan Banner') }}</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$record->description ??  old('description')}}</textarea>
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
                                    <input type="text" name="photo" value="{{$record->photo}}">
                                    <input type="file" class="custom-file-input @error('photo') is-invalid @enderror" name="photo" id="photo"
                                    aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="photo"> {{ $record->photo }}</label>
                                </div>
                            </div>

                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">{{ __('Status Bener') }}</label>
                            <select name="type" id="type" class="form-control">
                                <option value="" selected>-- Pilih --</option>
                                <option value="Aktif" {{ old('type') ?? $record->type == "Aktif" ? 'selected' : '' }}>Aktif</option>
                                <option value="Nonaktif" {{ old('type') ?? $record->type == "Nonaktif" ? 'selected' : '' }}>Nonaktif</option>
                            </select>
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                        <a href="{{ route('banner.index') }}" class="btn btn-default">{{ __('Kembali') }}</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Main Content -->
@endsection
