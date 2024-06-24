
<x-root-lp>
    <x-navbar-lp />
    @section('article')
        @include('landing_page.main.article.article')
    @endsection

    @section('news_article')
        @include('landing_page.main.news.news-article')
    @endsection

    <x-footer-lp />
    </section><!-- End Details Section -->
</x-root-lp>
