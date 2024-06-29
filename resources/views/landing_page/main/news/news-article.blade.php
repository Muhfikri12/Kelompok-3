<div class="trending-area fix" style="margin-top: 2rem">
    <div class="container">
        <div class="header-article-event my-3" data-aos="fade-up" style="text-color:#000;">
            <h4>Berita</h4>
        </div>
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle" style="margin-bottom: 1rem">
                        <strong>Berita Populer</strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30" data-view-count="100">
                        <div class="trend-top-img">
                            <img src="{{ asset($topPosts->photo) }}" alt="">
                            <div class="trend-top-cap">
                                <span>{{ $topPosts->name }}</span>
                                <h2><a
                                        href="{{ route('news.article', ['id' => $topPosts->article_id]) }}">{{ Str::limit($topPosts->content, 70) }}</a>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <!-- Trending Bottom -->
                    <div class="trending-bottom " style="margin-top: 1.5rem">
                        <div class="row ">
                            @foreach ($posts as $item)
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-20">
                                        <div class="trend-bottom-img mb-35">
                                            <img src="{{ asset($item->photo) }}" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1 mb-1">{{ $item->name }}</span>
                                            <p><a
                                                    href="{{ route('news.article', ['id' => $item->article_id]) }}">{{ Str::limit($item->content, 100) }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    <div class="mb-3">
                        <strong class="text-primary">Berita Terbaru</strong>
                    </div>
                    @foreach ($newsNew as $item)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ asset($item->photo) }}" alt="" class="responsive-fixed-image">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{ $item->name }}</span>
                                <small>
                                    <p><a
                                            href="{{ route('news.article', ['id' => $item->article_id]) }}">{{ Str::limit($item->content, 70) }}</a>
                                    </p>
                                </small>
                            </div>
                        </div>
                    @endforeach
                    <div class="trand-right-single d-flex justify-content-center">
                        <a class="btn btn-primary" href="{{ route('daftar.article') }}"> Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Define the threshold for the view count
        const viewCountThreshold = 5; // Adjust this number as needed

        // Select the trending top element
        const trendingTopElement = document.querySelector(".trending-top");

        // Get the view count from the data attribute
        const viewCount = parseInt(trendingTopElement.getAttribute("data-view-count"));

        // Check if the view count exceeds the threshold
        if (viewCount <= viewCountThreshold) {
            // If the view count is not enough, hide the element
            trendingTopElement.style.display = "none";
        }
    });
</script>
