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
                    <a href="{{ route('banner.create') }}" class="btn btn-primary mb-3">{{ __('Data Banner Baru') }}</a>
                    <div style="width:100%;overflow:scroll;">
                        <table class="table-bordered table-stripped display nowrap datatable table" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>{{ __('Judul') }}</th>
                                    <th>{{ __('Deskprisi') }}</th>
                                    <th>{{ __('Photo') }}</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $record)
                                    <tr>
                                        <td>{{ $record->judul ?? '' }}</td>
                                        <td>{{ $record->description ?? '' }}</td>
                                        <td><a href="{{ asset('storage/banner/' . $record->photo) }}"
                                                target="_blank">Lihat</a></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('banner.show', $record->id) }}"
                                                    class="btn btn-sm btn-secondary mr-2">{{ __('Lihat') }}</a>
                                                <a href="{{ route('banner.edit', $record->id) }}"
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
            $("#deleteForm").attr('action', '/banner/' + idHapus);
        })

        $('#deleteForm [type="submit"]').click(function() {
            $("#deleteForm").submit();
        })
    </script>
@endpush
