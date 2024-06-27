@extends('layouts.admin')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card mb-4 shadow">
                <div class="detail-content-news p-5">
                    <img src="{{ asset($event->photo) }}" class="img-fluid responsive-image mb-3 rounded" alt="">
                    <h1 style="font-weight: 800">{{ $event->title }}</h1>
                    <article>
                        {!! $event->detail_content !!}
                    </article>
                    <a href="{{ route('article.edit', ['id' => $event->id]) }}" class="btn btn-sm btn-primary mr-2"
                        style="width: 5rem">Edit</a>
                    <a href="{{ route('data.event', ['id' => $event->id]) }}" class="btn btn-sm btn-primary mr-2"
                        style="width: 5rem">Selesai</a>
                </div>
            </div>
        </div>
    </div>
@endsection
