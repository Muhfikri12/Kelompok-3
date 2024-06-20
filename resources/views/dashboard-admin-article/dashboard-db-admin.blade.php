@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Tabel Article') }}</h1>

<!-- Main Content goes here -->

<a href="{{ route('event') }}" class="btn btn-primary mb-3">{{ __('Data Baru') }}</a>

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<table class="table-bordered table-stripped display nowrap datatable table" style="width: 100%">
    <thead>
        <tr>
            <th>{{ __('No') }}</th>
            <th>{{ __('Judul') }}</th>
            <th>{{ __('Headline') }}</th>
            <th>{{ __('Detail Acara') }}</th>
            <th>#</th>
        </tr>
    </thead>
    @foreach ($articles as $item)
    <tbody>
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $item->title }}</td>
            <td>
                {{ \Illuminate\Support\Str::words($item->content, 5, '...') }}
            </td>
            <td>
                {{ \Illuminate\Support\Str::words($item->detail_content, 5, '...') }}
            </td>
            <td>
                <div class="d-flex">
                    <a href="" class="btn btn-sm btn-primary mr-2">Edit</a>
                    {{-- <form action="{{ route('demografi.destroy', $record->id) }}" method="post">
                    @csrf
                    @method('delete') --}}
                    <button class="btn btn-danger btn-sm btn-hapus" data-id="" data-toggle="modal" data-target="#DeleteModal">Delete</button>
                    {{-- </form> --}}
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
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
        $("#deleteForm").attr('action', '/demografi/' + idHapus);
    })

    // Jika tombol "Ya, Hapus" di klik, submit form
    $('#deleteForm [type="submit"]').click(function() {
        $("#deleteForm").submit();
    })
</script>
@endpush