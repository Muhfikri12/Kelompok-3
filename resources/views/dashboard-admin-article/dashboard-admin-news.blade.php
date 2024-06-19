<div class="header-create-content">
    <div class="header-dashboar-article">
        <a class="mx-3" href="{{ url('/createArticle') }}">Agenda Acara</a>
        <a href="#">Pengumuman</a>
    </div>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>

<div class="content-dashboard-article">

    <div class="form-content-dasboard-article">
        <form action="" method="POST">
            @csrf
            <table>
                <tr>
                    <td><label for="event_article">Judul Berita</label></td>
                    <td><input type="text" id="event_article" name="event_article"></td>
                </tr>
                <tr>
                    <td><label for="headline_article">Headline Berita</label></td>
                    <td><input type="text" id="headline_article" name="headline_article" required> </td>
                </tr>
                <tr>
                    <td><label for="image_content">Masukan Gambar</label></td>
                    <td><input type="file" id="image_content" name="image_content"></td>
                </tr>
                <tr>
                    <td><label for="detail_content">Isi Berita</label></td>
                    <td>
                        <textarea id="detail_content" name="detail_content"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn more-btn">Simpan</td>
                </tr>
            </table>
        </form>
    </div>
</div>
