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
                    <label for="tahun">{{__('Tahun')}}</label>
                    <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" id="tahun" placeholder="1945" autocomplete="off" value="{{ $record->tahun ?? old('tahun') }}">
                    @error('tahun')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="kategori">{{__('Kategori')}}</label>
                    <select name="kategori_id" id="kategori_id" class="form-control">
                        <option value="">-- Pilih --</option>
                        @foreach ($category as $item)
                            <option value="{{$item->id}}" {{$record->kategori_id == ($record->kategori_id || old('kategori_id')) ? 'selected' : ''}}>{{$item->nama}}</option>
                        @endforeach
                    </select>
                    @error('kategori')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="keterangan">{{__('Keterangan')}}</label>
                  <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" placeholder="Perempuan" autocomplete="off" value="{{ $record->keterangan ?? old('keterangan') }}">
                  @error('keterangan')
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
                    <label for="satuan">{{__('Satuan')}}</label>
                    <select name="satuan" id="satuab" class="form-control">
                      <option value="">-- Pilih --</option>
                      <option value="Jiwa" {{(old('satuan') ?? $record->satuan) == "Jiwa" ? "selected" : ''}}>Jiwa</option>
                      <option value="Orang" {{(old('satuan') ?? $record->satuan)  == "Orang" ? 'selected' : ''}}>Orang</option>
                      <option value="Kepala Keluarga" {{ old("satuan") ?? $record->satuan  == "Kepala Keluarga" ? "selected" : ''}}>Kepala Keluarga</option>
                      <option value="KK" {{ (old('satuan') ?? $record->satuan) == "KK"  ? 'selected' : ''}}>KK</option>
                      <option value="KTP" {{ (old('satuan') ?? $record->satuan) == "KTP" ? 'selected' : ''}}>KTP</option>
                    </select>
                    @error('satuan')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <button type="submit" class="btn btn-primary">{{__('Simpan')}}</button>
                <a href="{{ route('demografi.index') }}" class="btn btn-default">{{__('Kembali')}}</a>

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
