@extends('layouts.admin')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card mb-4 shadow">
                <div class="detail-content-news p-5">
                    <img src="{{ asset($news->photo) }}" class="img-fluid responsive-image mb-3 rounded" alt="">
                    <h1 style="font-weight: 800">{{ $news->title }}</h1>
                    <article>
                        {!! $news->detail_content !!}
                    </article>
                    <a href="{{ route('news.edit', ['id' => $news->id]) }}" class="btn btn-sm btn-primary mr-2"
                        style="width: 5rem">Edit</a>
                    <a href="{{ route('data.news', ['id' => $news->id]) }}" class="btn btn-sm btn-primary mr-2"
                        style="width: 5rem">Selesai</a>
                </div>
            </div>
        </div>
    </div>
@endsection
