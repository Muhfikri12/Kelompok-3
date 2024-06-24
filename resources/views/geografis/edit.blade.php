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
                    <form action="{{ route('geografis.update', $record->id) }}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="name">{{__('Nama Desa')}}</label>
                            <input type="text" class="form-control form-control-user" name="name" placeholder="{{ __('Name') }}" value="{{ $record->name ?? old('name') }}" required autofocus>
                            @error('name')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                              <label for="koordinat">{{__('Koordinat')}}</label>
                              <input type="text" class="form-control form-control-user" name="koordinat" placeholder="{{ __('Name') }}" value="{{ $record->koordinat ?? old('koordinat') }}" required autofocus>
                              @error('koordinat')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="luas">{{__('Luas Wilayah')}}</label>
                              <input type="text" class="form-control form-control-user" name="luas" placeholder="{{ __('Name') }}" value="{{ $record->luas ?? old('luas') }}" required autofocus>
                              @error('luas')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="utara">{{__('Batas Utara')}}</label>
                              <input type="text" class="form-control form-control-user" name="utara" placeholder="{{ __('Name') }}" value="{{ $record->utara ?? old('utara') }}" required autofocus>
                              @error('utara')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="selatan">{{__('Batas Selatan')}}</label>
                              <input type="text" class="form-control form-control-user" name="selatan" placeholder="{{ __('Name') }}" value="{{ $record->utara ?? old('selatan') }}" required autofocus>
                              @error('selatan')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="timur">{{__('Batas Timur')}}</label>
                              <input type="text" class="form-control form-control-user" name="timur" placeholder="{{ __('Name') }}" value="{{ $record->timur ?? old('timur') }}" required autofocus>
                              @error('timur')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="barat">{{__('Batas Barat')}}</label>
                              <input type="text" class="form-control form-control-user" name="barat" placeholder="{{ __('Name') }}" value="{{ $record->barat ?? old('barat') }}" required autofocus>
                              @error('barat')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="barat">{{__('Batas Barat')}}</label>
                              <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $record->description ?? old('description') }}</textarea>
                              @error('barat')
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
