<div class="content-dashboard-article">

    <div class="form-content-dasboard-article">
        <h3 class="font-weight-bold text-primary m-0">{{ $title ?? __('Membuat Acara') }}</h3>
        <hr>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td><label for="event_news">Judul Berita</label></td>
                    <td><input type="text" id="event_news" name="event_news"></td>
                </tr>
                <tr>
                    <td><label for="event_cat">Kategori Berita</label></td>
                    <td><select style="padding: 2px 10px; border-radius: 10px; height: 2.1rem; width: 100%;"
                            id="event_cat" name="event_cat">
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select></td>

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
