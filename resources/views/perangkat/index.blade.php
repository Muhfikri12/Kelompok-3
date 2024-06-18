@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <a href="{{ route('perangkat.create') }}" class="btn btn-primary mb-3">{{ __('Data Baru') }}</a>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table-bordered table-stripped display nowrap datatable table" style="width: 100%">
        <thead>
            <tr>
                <th>{{ __('Nama') }}</th>
                <th>{{ __('NIP') }}</th>
                <th>{{ __('Phone') }}</th>
                <th>{{ __('Jabatan') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Photo') }}</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $record)
                <tr>
                    <td>{{$record->name ?? ''}}</td>
                    <td>{{$record->nip ?? ''}}</td>
                    <td>{{$record->phone ?? ''}}</td>
                    <td>{{$record->jabatan ?? ''}}</td>
                    <td>{{$record->status ?? ''}}</td>
                    <td><a href="{{asset('storage/'.$record->photo)}}" target="_blank">Lihat</a></td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('perangkat.edit', $record->id) }}"
                                class="btn btn-sm btn-primary mr-2">Edit</a>
                            <button class="btn btn-danger btn-sm btn-hapus" data-id="{{ $record->id }}"
                                data-toggle="modal" data-target="#DeleteModal">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
                $("#deleteForm").attr('action', '/perangkat/' + idHapus);
            })

            $('#deleteForm [type="submit"]').click(function() {
                $("#deleteForm").submit();
            })
        </script>
    @endpush
