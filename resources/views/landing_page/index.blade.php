@extends('landing_page.layout.app')

@section('header')
    @include('landing_page.header.header')
@endsection

@section('footer')
    @include('landing_page.footer.footer')
@endsection

@section('article')
    @include('landing_page.main.article.article')
@endsection

@section('news_article')
    @include('landing_page.main.news-article')
@endsection
