<div class="content-dashboard-article">

    <div class="form-content-dasboard-article">
        <h3 class="font-weight-bold text-primary m-0">{{ $title ?? __('Edit Acara') }}</h3>
        <hr>
        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td><label for="event_article">Nama Acara</label></td>
                    <td><input type="text" id="event_article" name="event_article" value="{{ $articles->title }}"></td>
                </tr>
                <tr>
                    <td><label for="headline_article">Headline Acara</label></td>
                    <td><input type="text" id="headline_article" name="headline_article"
                            value="{{ $articles->content }}" required> <br></td>
                </tr>
                <tr>
                    <td><label for="event_time">Waktu Pelaksanaan</label></td>
                    <td><input type="text" id="event_time" name="event_time" required
                            value="{{ $articles->event_time }}"> <br></td>
                </tr>
                <tr>
                    <td><label for="event_date">Tanggal Pelaksanaan</label></td>
                    <td><input type="date" id="event_date" name="event_date" required
                            value="{{ $articles->event_date }}"></td>
                </tr>
                <tr>
                    <td><label for="event_place">Tempat Pelaksanaan</label></td>
                    <td><input type="type" id="event_place" name="event_place" required
                            value="{{ $articles->place }}"></td>
                </tr>

                <tr>
                    <td><label for="image_content">Masukan Gambar</label></td>
                    <td><input type="file" id="image_content" name="image_content" value="{{ $articles->photo }}">
                    </td>
                    <td><input type="hidden" name="type" value="pengumuman"></td>
                </tr>
                <tr>
                    <td><label for="detail_content">Detail Acara</label></td>
                    <td>
                        <textarea id="detail_content" name="detail_content">{{ $articles->detail_content }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn more-btn"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
