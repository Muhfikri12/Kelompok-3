@extends('layouts.admin')

@section('main-content')
    <!-- Main Content goes here -->

    <section class="dashboard-article">
        <div class="header-dashboar-article mb-4">
            <a class="mx-3" href="#">Agenda Acara</a>
            <a href="#">Pengumuman</a>
        </div>

        <div class="content-dashboard-article">

            <div class="form-content-dasboard-article">
                <form action="" method="POST">
                    @csrf
                    <div class="form_event_article">
                        <label for="event_article">Nama Acara</label>
                        <input style="margin-left: 4.2rem" type="text" id="event_article" name="event_article">
                    </div>
                    <div class="form_headline_article ">
                        <label for="event_detail_content_article">Headline Acara</label>
                        <input type="text" id="title" name="title" required> <br>
                    </div>

                    <div class="form_detail_article">
                        <label for="detail_content">Detail Acara</label>
                        <textarea id="detail_content" name="detail_content"></textarea>
                    </div>

                    <a href="#" class="btn more-btn">Simpan</a>

                </form>
            </div>
        </div>
    </section> <!-- End of Main Content -->
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

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
@endpush
