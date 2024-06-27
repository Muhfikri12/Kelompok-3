{{-- <div class="container-xxl py-6 news_content">
    <div class="container">
        <div class="header-article-event mb-3" data-aos="fade-up">
            <h4>Berita</h4>
        </div>
        <div class="row g-4">
            @foreach ($news as $item)
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="card text-bg-dark card_news">
                        <a href="{{ route('news.article', ['id' => $item->id]) }}">
                            <div class="card-img-container">
                                <img src="{{ asset($item->photo) }}" class="card-img card-img-zoom img-fluid"
                                    alt="...">
                            </div>
                        </a>
                        <div class="card-img-overlay d-flex align-items-end">
                            <div class="text-container">
                                <a href="{{ route('news.article', ['id' => $item->id]) }}"
                                    class="text-decoration-none text-dark">
                                    <strong>
                                        <h5 class="card-title mb-0 text-light" style="font-weight: 500">
                                            {{ ucwords(strtolower($item->title)) }}
                                        </h5>
                                    </strong>
                                </a>
                                <a href="{{ route('news.article', ['id' => $item->id]) }}"
                                    class="text-decoration-none text-dark">
                                    <p class="card-text text-light">{{ $item->content }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> --}}

<div class="trending-area fix" style="margin-top: 2rem">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle" style="margin-bottom: 1rem">
                        <strong>Trending now</strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    @foreach ($topPosts as $item)
                        <div class="trending-top mb-30" data-view-count="100">
                            <div class="trend-top-img">
                                <img src="{{ asset($item->photo) }}" alt="">
                                <div class="trend-top-cap">
                                    <span>{{ $item->name }}</span>
                                    <h2><a
                                            href="{{ route('news.article', ['id' => $item->article_id]) }}">{{ Str::limit($item->content, 70) }}</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Trending Bottom -->
                    <div class="trending-bottom " style="margin-top: 1.5rem">
                        <div class="row ">
                            @foreach ($posts as $item)
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset($item->photo) }}" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">{{ $item->name }}</span>
                                            <h4><a
                                                    href="{{ route('news.article', ['id' => $item->article_id]) }}">{{ Str::limit($item->content, 50) }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/trending/right1.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1">Concert</span>
                            <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/trending/right2.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color3">sea beach</span>
                            <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/trending/right3.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color2">Bike Show</span>
                            <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/trending/right4.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color4">See beach</span>
                            <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/trending/right5.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1">Skeping</span>
                            <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
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
