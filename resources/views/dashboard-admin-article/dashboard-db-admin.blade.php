@extends('layouts.admin')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card mb-4 shadow">
                <div class="card-header py-3">
                    <h3 class="font-weight-bold text-primary m-0">{{ $title ?? __('Tabel Acara') }}</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('event') }}" class="btn btn-primary mb-3">{{ __('Data Baru') }}</a>



                    <table class="table-bordered table-stripped display nowrap datatable table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>{{ __('No') }}</th>
                                <th>{{ __('Judul') }}</th>
                                <th>{{ __('Headline') }}</th>
                                <th>{{ __('Jadwal Acara') }}</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $item)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        {{ \Illuminate\Support\Str::words($item->content, 5, '...') }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($item->event_date)->format('d-m-Y') }}
                                        {{ $item->event_time }}
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('article.show', ['id' => $item->id]) }}"
                                                class="btn btn-sm btn-primary mr-2">Lihat</a>
                                            <a href="{{ route('article.edit', ['id' => $item->id]) }}"
                                                class="btn btn-sm btn-primary mr-2">Edit</a>
                                            <button class="btn btn-danger btn-sm btn-hapus" data-id="{{ $item->id }}"
                                                data-toggle="modal" data-target="#DeleteModal">{{ __('Hapus') }}</button>
                                            {{-- </form> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End of Main Content -->
                </div>
            </div>
        </div>
    </div>
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
            $("#deleteForm").attr('action', '/acara/' + idHapus);
        })

        // Jika tombol "Ya, Hapus" di klik, submit form
        $('#deleteForm [type="submit"]').click(function() {
            $("#deleteForm").submit();
        })
    </script>
@endpush
