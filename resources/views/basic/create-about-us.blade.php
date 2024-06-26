@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('About Us') }}</h1>

    <!-- Main Content goes here -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('basic.store') }}" method="post">
                @csrf
                {{-- 
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" placeholder="First name" autocomplete="off" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                        id="last_name" placeholder="Last name" autocomplete="off" value="{{ old('last_name') }}">
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="facebook"
                        placeholder="https://www.facebook.com/" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" name="instagram" id="instagram"
                        placeholder="https://www.instagram.com/" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="whatsapp">WhatsApp</label>
                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="https://wa.me/"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input type="text" class="form-control" name="youtube" id="youtube"
                        placeholder="https://www.youtube.com/" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control" name="address" id="address"
                        placeholder="Nama Jalan, Nomor Rumah/Kantor, Kelurahan/Desa, Kecamatan Kota/Kabupaten, Provinsi, Kode Pos, Negara
"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="siapa-kami">Siapa Kami</label>
                    <textarea type="text" class="form-control" name="siapa-Kami" id="siapa-kami"
                        placeholder="Desa [Nama Desa] adalah sebuah desa yang terletak di [Lokasi atau Kabupaten/Kota]..."
                        autocomplete="off" style="padding: 8px; resize:none; " cols="30" rows="5"></textarea>
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
