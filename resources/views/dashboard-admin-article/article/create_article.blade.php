<div class="content-dashboard-article">

    <div class="form-content-dasboard-article">
        <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Membuat Acara') }}</h1>
        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td><label for="event_article">Nama Acara</label></td>
                    <td><input type="text" id="event_article" name="event_article"></td>
                </tr>
                <tr>
                    <td><label for="headline_article">Headline Acara</label></td>
                    <td><input type="text" id="headline_article" name="headline_article" required> <br></td>
                </tr>
                <tr>
                    <td><label for="event_time">Waktu Pelaksanaan</label></td>
                    <td><input type="text" id="event_time" name="event_time" required> <br></td>
                </tr>
                <tr>
                    <td><label for="event_date">Tanggal Pelaksanaan</label></td>
                    <td><input type="date" id="event_date" name="event_date" required></td>
                </tr>
                <tr>
                    <td><label for="event_place">Tempat Pelaksanaan</label></td>
                    <td><input type="type" id="event_place" name="event_place" required></td>
                </tr>

                <tr>
                    <td><label for="image_content">Masukan Gambar</label></td>
                    <td><input type="file" id="image_content" name="image_content"></td>
                    <td><input type="hidden" name="type" value="pengumuman"></td>
                </tr>
                <tr>
                    <td><label for="detail_content">Detail Acara</label></td>
                    <td>
                        <textarea id="detail_content" name="detail_content"></textarea>
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
