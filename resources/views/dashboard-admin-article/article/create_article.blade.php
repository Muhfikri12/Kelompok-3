<div class="content-dashboard-article">
    <div class="form-content-dasboard-article">
        <h3 class="font-weight-bold text-primary m-0">{{ $title ?? __('Membuat Acara') }}</h3>
        <hr>
        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td><label for="event_article">Nama Acara</label></td>
                    <td><input type="text" @error('event_article') is-invalid @enderror name="event_article"
                            id="event_article">
                        @error('event_article')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td><label for="headline_article">Headline Acara</label></td>
                    <td><input type="text" id="headline_article" @error('headline_article') is-invalid @enderror
                            name="headline_article">
                        @error('headline_article')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td><label for="event_time">Waktu Pelaksanaan</label></td>
                    <td><input type="text" id="event_time" name="event_time" placeholder="Contoh: 12:00"
                            @error('event_time')
                        is-invalid
                    @enderror>
                        @error('event_time')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td><label for="event_date">Tanggal Pelaksanaan</label></td>
                    <td><input type="date" id="event_date" name="event_date"
                            @error('event_date')
                        is-invalid
                    @enderror>
                        @error('event_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td><label for="event_place">Tempat Pelaksanaan</label></td>
                    <td><input type="type" id="event_place" name="event_place"
                            @error('event_place')
                        is-invalid
                    @enderror>

                        @error('event_place')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>

                <tr>
                    <td><label for="image_content">Masukan Gambar</label></td>
                    <td><input type="file" id="image_content" name="image_content"
                            @error('image_content')
                        is-invalid
                    @enderror>
                        @error('image_content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                    <td><input type="hidden" name="type" value="pengumuman"></td>
                </tr>
                <tr>
                    <td><label for="detail_content">Detail Acara</label></td>
                    <td>
                        <textarea id="detail_content"
                            name="detail_content"@error('detail_content')
                        is-invalid
                    @enderror></textarea>

                        @error('detail_content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
