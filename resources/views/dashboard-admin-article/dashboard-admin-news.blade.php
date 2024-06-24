@extends('layouts.admin')

@section('main-content')
    <div class="content-dashboard-article">

        <div class="form-content-dasboard-article">
            <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Membuat Berita') }}</h1>
            <form action="{{ url('create/berita') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table>
                    <tr>
                        <td><label for="event_news">Judul Berita</label></td>
                        <td><input type="text" id="event_news" name="event_news"></td>
                    </tr>
                    <tr>
                        <td><label for="headline_news">Headline Berita</label></td>
                        <td><input type="text" id="headline_news" name="headline_news" required> <br></td>
                    </tr>
                    <tr>
                        <td><label for="image_content">Masukan Gambar</label></td>
                        <td><input type="file" id="image_content" name="image_content"></td>
                    </tr>
                    <tr>
                        <td><label for="detail_news">Detail Acara</label></td>
                        <td>
                            <textarea id="detail_content" name="detail_news"></textarea>
                        </td>
                        <td><input type="hidden" name="type" value="berita"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn more-btn"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
