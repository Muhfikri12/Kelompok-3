@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <a href="{{ route('demografi.create') }}" class="btn btn-primary mb-3">{{ __('Data Baru') }}</a>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    {{-- Modal Konfirmasi Delete --}}
    <div id="DeleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form action="" id="deleteForm" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Konfirmasi</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            &times;</button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Apakah kamu yakin ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">
                            Cancel</button>
                        <button type="submit" class="btn btn-danger" data-dismiss="modal">
                            Ya, Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- End Modal --}}

    <table class="table-bordered table-stripped display nowrap datatable table" style="width: 100%">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>{{ __('No') }}
                <th>{{ __('Tahun') }}</th>
                <th>{{ __('Kategori') }}</th>
                <th>{{ __('Keterangan') }}</th>
                <th>{{ __('Jumlah') }}</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $record)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $record->tahun }}</td>
                    <td>{{ $record->category->nama }}</td>
                    <td>{{ $record->keterangan }}</td>
                    <td>{{ $record->total . " $record->satuan" }}</td>

                    <td>
                        <div class="d-flex">
                            <a href="{{ route('demografi.edit', $record->id) }}"
                                class="btn btn-sm btn-primary mr-2">{{__('Ubah')}}</a>
                            {{-- <form action="{{ route('demografi.destroy', $record->id) }}" method="post">
                                @csrf
                                @method('delete') --}}
                            <button class="btn btn-danger btn-sm btn-hapus" data-id="{{ $record->id }}"
                                data-toggle="modal" data-target="#DeleteModal">{{__('Hapus')}}</button>
                            {{-- </form> --}}
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
            $("#deleteForm").attr('action', '/demografi/' + idHapus);
        })

        // Jika tombol "Ya, Hapus" di klik, submit form
            $('#deleteForm [type="submit"]').click(function(){
            $("#deleteForm").submit();
            })
    </script>
@endpush
