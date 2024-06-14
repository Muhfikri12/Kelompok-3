@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('demografi.update', $record->id) }}" method="post">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" id="tahun" placeholder="1945" autocomplete="off" value="{{ $record->tahun ?? old('tahun') }}">
                    @error('tahun')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori" placeholder="Usia" autocomplete="off" value="{{ $record->kategori ?? old('kategori') }}">
                    @error('kategori')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Perempuan" autocomplete="off" value="{{ $record->name ?? old('name') }}">
                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="total">Total</label>
                  <input type="integer" class="form-control @error('total') is-invalid @enderror" name="total" id="total" placeholder="10000" autocomplete="off" value="{{ $record->total ??  old('total') }}">
                  @error('total')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <select name="satuan" id="satuab" class="form-control">
                      <option value="" selected>-- Pilih --</option>
                      <option value="Orang" {{$record->satuan == (old('satuan') ?? "Orang") ? 'selected' : ''}}>Orang</option>
                      <option value="KK" {{$record->satuan == (old('satuan') ?? "KK") ? 'selected' : ''}}>KK</option>
                      <option value="KTP" {{$record->satuan == (old('satuan') ?? "KTP") ? 'selected' : ''}}>KTP</option>
                    </select>
                    @error('satuan')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('basic.index') }}" class="btn btn-default">Back to list</a>

            </form>
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
