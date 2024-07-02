<div class="content-dashboard-article">

    <div class="form-content-dasboard-article">
        <h3 class="font-weight-bold text-primary m-0">{{ $title ?? __('Ubah Berita') }}</h3>
        <hr>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <td><label for="event_article">Nama Acara</label></td>
                    <td><input type="text" id="event_article" name="event_article" value="{{ $news->title }}"></td>
                </tr>
                <tr>
                    <td><label for="headline_article">Headline Acara</label></td>
                    <td><input type="text" id="headline_news" name="headline_news" value="{{ $news->content }}"
                            required> <br></td>
                </tr>
                <tr>
                    <td><label for="photo">{{ __('Gambar') }}</label></td>
                    <td>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="text">
                                <input type="file" class="custom-file-input @error('photo') is-invalid @enderror"
                                    name="image_content" id="photo" aria-describedby="inputGroupFileAddon01"
                                    value="{{ $news->photo }}">
                                <label class="custom-file-label" for="photo"> {{ $news->photo }}</label>
                            </div>
                        </div>
                    </td>
                    <td><input type="hidden" name="type" value="berita"></td>
                </tr>
                <tr>
                    <td><label for="detail_content">Detail Acara</label></td>
                    <td>
                        <textarea id="detail_content" name="detail_content">{{ $news->detail_content }}</textarea>
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
