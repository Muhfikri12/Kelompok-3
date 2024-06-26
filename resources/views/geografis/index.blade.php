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
                    <table class="table-bordered table-stripped display nowrap datatable table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>{{ __('Nama Desa') }}</th>
                                <th>{{ __('Luas') }}</th>
                                <th>{{ __('Koordinat') }}</th>
                                <th>{{ __('Batas Utara') }}</th>
                                <th>{{ __('Batas Selatan') }}</th>
                                <th>{{ __('Batas Timur') }}</th>
                                <th>{{ __('Batas Barat') }}</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $record)
                                <tr>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->luas ?? '-' }}</td>
                                    <td>{{ $record->koordinat ?? '-' }}</td>
                                    <td>{{ $record->utara ?? '' }}</td>
                                    <td>{{ $record->selatan ?? '-' }}</td>
                                    <td>{{ $record->timur ?? '-' }}</td>
                                    <td>{{ $record->barat ?? '-' }}</td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('geografis.show', $record->id) }}"
                                                class="btn btn-sm btn-secondary mr-2">{{ __('Lihat') }}</a>
                                            <a href="{{ route('geografis.edit', $record->id) }}"
                                                class="btn btn-sm btn-primary mr-2">{{ __('Ubah') }}</a>
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
            $("#deleteForm").attr('action', '/geografis/' + idHapus);
        })

        // Jika tombol "Ya, Hapus" di klik, submit form
        $('#deleteForm [type="submit"]').click(function() {
            $("#deleteForm").submit();
        })
    </script>
@endpush
