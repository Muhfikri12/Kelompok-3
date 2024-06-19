@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <a href="{{ route('category-demografi.create') }}" class="btn btn-primary mb-3">{{__('Data Baru')}}</a>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table table-bordered table-stripped display nowrap datatable" style="width: 100%">
        <thead>
            <tr>
                <th>{{__('No')}}</th>
                <th>Nama</th>
                <th>{{__('Keterangan')}}</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $record)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $record->nama }}</td>
                    <td>{{ $record->keterangan ?? '-' }}</td>

                    <td>
                        <div class="d-flex">
                            <a href="{{ route('category-demografi.edit', $record->id) }}" class="btn btn-sm btn-primary mr-2">{{__('Ubah')}}</a>
                            <form action="{{ route('category-demografi.destroy', $record->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">{{__('Hapus')}}</button>
                            </form>
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
