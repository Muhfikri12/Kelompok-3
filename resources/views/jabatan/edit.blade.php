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
                    <form action="{{ route('jabatan.update', $record->id) }}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="nama">{{__('Nama')}}</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="name" id="nama" placeholder="1945" autocomplete="off" value="{{ $record->name ?? old('nama') }}">
                            @error('nama')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="satypetuan">{{__('Tipe')}}</label>
                            <select name="type" id="satuab" class="form-control">
                              <option value="">-- Pilih --</option>
                              <option value="Kades" {{(old('type') ?? $record->type) == "Kades" ? "selected" : ''}}>Kades</option>
                              <option value="Sekertaris" {{(old('type') ?? $record->type)  == "Sekertaris" ? 'selected' : ''}}>Sekertaris</option>
                              <option value="Kaur" {{ old("type") ?? $record->type  == "Kaur" ? "selected" : ''}}>Kaur</option>
                              <option value="Kasi" {{ (old('type') ?? $record->type) == "Kasi"  ? 'selected' : ''}}>Kasi</option>
                              <option value="Staf" {{ (old('type') ?? $record->type) == "Staf" ? 'selected' : ''}}>Staf</option>
                            </select>
                            @error('type')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                        <div class="form-group">
                          <label for="description">{{__('Keterangan')}}</label>
                          <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Keterangan jabatan" autocomplete="off" value="{{ $record->description ?? old('description') }}">
                          @error('description')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{__('Simpan')}}</button>
                        <a href="{{ route('jabatan.index') }}" class="btn btn-default">{{__('Kembali')}}</a>

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
