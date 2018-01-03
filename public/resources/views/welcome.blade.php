@extends("layouts.app")

@section("page-wrap")
    <!--Page main wrapper -->
    <div id="main-content" class="abs dark-template">
        <div class="kb-slider">
            <div class="item">
                <img src="asset/image/slide1.jpg" alt="img">
                <div class="caption" data-pos="bottom-left">
                    <a href="portfolio-2.html" title="sample page">
                        <span class="sub-title">Fast Worker, Build Up Site</span>
                        <span class="title">Web Developer</span>
                    </a>
                </div>
            </div>

            <div class="item">
                <img src="asset/image/slide2.png" alt="img">
                <div class="caption" data-pos="bottom-left">
                    <a href="portfolio-single.html" title="sample page">
                        <a href="portfolio-2.html" title="sample page">
                            <span class="sub-title">Cross Platform Developer</span>
                            <span class="title">Mobile Developer</span>
                        </a>
                    </a>
                </div>
            </div>


        </div>

    </div>
    <!--/Page main wrapper -->
    @endsection