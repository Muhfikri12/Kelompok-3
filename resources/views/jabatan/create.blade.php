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
                    <form action="{{ route('jabatan.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama Jabatan" autocomplete="off" value="{{ old('name') }}">
                            @error('name')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="type">{{__('Tipe')}}</label>
                            <select name="type" id="satuab" class="form-control">
                              <option value="" selected>-- Pilih --</option>
                              <option value="Kades" {{"Kades" == old('type') ? "selected" : ''}}>Kades</option>
                              <option value="Sekertaris" {{"Sekertaris" == old('type') ? "selected" : ''}}>Sekertaris</option>
                              <option value="Kaur" {{"Kaur" == old('type') ? "selected" : ''}}>Kaur</option>
                              <option value="Kasi" {{"Kasi" == old('type') ? "selected" : ''}}>Kasi</option>
                              <option value="Staf" {{"Staf" == old('type') ? "selected" : ''}}>Staf</option>
                            </select>
                            @error('type')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>




                        <div class="form-group">
                          <label for="keterangan">{{__('Keterangan')}}</label>
                          <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" placeholder="Keterangan" autocomplete="off" value="{{ old('keterangan') }}">
                          @error('keterangan')
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

