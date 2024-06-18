<div class="header-dashboar-article mb-4">
    <a class="mx-3" href="#">Agenda Acara</a>
    <a href="{{ route('news') }}">Pengumuman</a>
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

            <div class="form_images_article">
                <label for="image_content">Masukan Gambar</label>
                <input class="mx-5" type="file" id="image_content" name="image_content">
            </div>

            <div class="form_detail_article">
                <label for="detail_content">Detail Acara</label>
                <textarea id="detail_content" name="detail_content"></textarea>
            </div>


            <a href="#" class="btn more-btn">Simpan</a>

        </form>
    </div>
</div>
