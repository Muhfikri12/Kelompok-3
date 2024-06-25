@extends('layouts.admin')

@section('main-content')
    <!-- Main Content goes here -->
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col">
            <div class="card mb-4 shadow">
                <div class="card-header py-3">
                    <h3 class="font-weight-bold text-primary m-0">{{ $title ?? __('Blank Page') }}</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('lembaga.create') }}" class="btn btn-primary mb-3">{{ __('Lembaga Baru') }}</a>
                    <table class="table-bordered table-stripped display nowrap datatable table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>{{ __('Nama Desa') }}</th>
                                <th>{{ __('Tipe') }}</th>
                                <th>{{ __('Ketua') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Telepon') }}</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $record)
                                <tr>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->type ?? '-' }}</td>
                                    <td>{{ $record->leader ?? '-' }}</td>
                                    <td>{{ $record->email ?? '' }}</td>
                                    <td>{{ $record->phone ?? '-' }}</td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('lembaga.show', $record->id) }}"
                                                class="btn btn-sm btn-secondary mr-2">{{ __('Lihat') }}</a>
                                            <a href="{{ route('lembaga.edit', $record->id) }}"
                                                class="btn btn-sm btn-primary mr-2">{{ __('Ubah') }}</a>
                                                <button class="btn btn-danger btn-sm btn-hapus" data-id="{{ $record->id }}"
                                                    data-toggle="modal" data-target="#DeleteModal">{{ __('Hapus') }}</button>

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

@push('js')
    <script>
        $('.btn-hapus').click(function() {
            let idHapus = $(this).attr('data-id');
            $("#deleteForm").attr('action', '/lembaga/' + idHapus);
        })

        // Jika tombol "Ya, Hapus" di klik, submit form
        $('#deleteForm [type="submit"]').click(function() {
            $("#deleteForm").submit();
        })
    </script>
@endpush
