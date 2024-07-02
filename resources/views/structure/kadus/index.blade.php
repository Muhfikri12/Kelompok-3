@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1> --}}

    <!-- Main Content goes here -->



    <div class="row">

        <div class="col mb-4">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">{{ $title ?? __('Blank Page') }}</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('kadus.create') }}" class="btn btn-primary mb-3">{{ __('Data Kadus Baru') }}</a>
                    <div style="width:100%;overflow:scroll;">
                        <table class="table table-bordered table-stripped display nowrap" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>{{ __('No') }}</th>
                                    <th>{{ __('Nama Petugas') }}</th>
                                    <th>{{ __('Struktur') }}</th>
                                    <th>{{ __('Pimpinan') }}</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $record)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $record->petugas->name ?? '-' }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->parent->name }}</td>

                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('kadus.show', $record->id) }}"
                                                    class="btn btn-sm btn-secondary mr-2">{{ __('Lihat') }}</a>
                                                <a href="{{ route('kadus.edit', $record->id) }}"
                                                    class="btn btn-sm btn-primary mr-2">{{ __('Ubah') }}</a>

                                                <button class="btn btn-danger btn-sm btn-hapus"
                                                    data-id="{{ $record->id }}" data-toggle="modal"
                                                    data-target="#DeleteModal">{{ __('Hapus') }}</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End of Main Content -->
@endsection

@push('js')
    <script>
        $('.btn-hapus').click(function() {
            let idHapus = $(this).attr('data-id');
            $("#deleteForm").attr('action', '/kadus/' + idHapus);
        })

        // Jika tombol "Ya, Hapus" di klik, submit form
        $('#deleteForm [type="submit"]').click(function() {
            $("#deleteForm").submit();
        })
    </script>
@endpush
