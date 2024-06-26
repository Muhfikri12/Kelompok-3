@extends('landing_page.layout.app')

@section('header')
    @include('components.navbar-lp')
@endsection

@section('footer')
    @include('components.footer-lp')
@endsection

@section('article')
    @include('landing_page.main.article.article')
@endsection

@section('news_article')
    @include('landing_page.main.news.news-article')
@endsection
