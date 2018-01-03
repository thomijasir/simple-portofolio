@extends("layouts.app")

@section("page-wrap")
    <!--Page main wrapper -->
    <!-- Page main wrapper -->
    <div id="main-content" class="blog-list"> <!-- attention to the classname -->
        <div class="page-wrapper regular-page">
            <div class="container">

                <!-- page title -->
                <h2 class="section-title double-title">
                    Apknool
                </h2>
                <!--/ page title -->

                <div class="row mb-large">
                    <!-- main blog list content -->
                    <div class="col-md-8">
                        <img src="asset/portofolio/apknool/Artboard%201-100.jpg" class="img-responsive" style="width: 100%">

                        <div class="post-contents">
                            <br>
                            <ul>
                                <ul class="list-items">
                                    <li>
                                        <div class="list-label">Category</div>
                                        <div class="list-des">Apknool</div>
                                    </li>
                                    <li>
                                        <div class="list-label">Date</div>
                                        <div class="list-des">May 2016</div>
                                    </li>
                                    <li>
                                        <div class="list-label">Demo</div>
                                        <div class="list-des">http://www.apknool.com</div>
                                    </li>

                                </ul>
                            </ul>
                        </div>

                        <p>Apknool template built in with boostrap, It was November. Although it was not yet late, the sky was dark when I turned into Laundress Passage. Father had finished for the day, switched off the shop lights and closed the shutters; but so I would not come home to darkness he had left on the light over the stairs to the flat. <br><br>Through the glass in the door it cast a foolscap rectangle of paleness onto the wet pavement, and it was while I was standing in that rectangle, about to turn my key in the door, that I first saw the letter. Another white rectangle, it was on the fifth step from the bottom</p>
                        <img src="asset/portofolio/apknool/screencapture-apknool-1494160627031.png" class="img-responsive">
                        <br>
                        <img src="asset/portofolio/apknool/screencapture-apknool-category-android-game-action-game-1494160660277.png" class="img-responsive">
                    </div>
                    <!-- /main blog list content -->



                    <!-- sidebar -->
                    <div class="col-md-4 regular-sidebar">
                        <!--
                                            &lt;!&ndash; Blog Widget &ndash;&gt;
                                            <div class="widget">
                                                <div class="widget-body">
                                                    <img src="../assets/img/blog/author1.jpg" class="circular img-responsive author-image" alt="image">

                                                    <h5 class="text-center underlined allcaps">Ivana Rasima</h5>
                                                    <p class="text-center mb-small">When I am with you, we stay up all night. When you're not here, I can't go to sleep. Praise God for those two insomnias! And the difference between them.</p>
                                                    <ul class="social-icons text-center">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>
                                                    <hr/>
                                                </div>
                                            </div>
                                            &lt;!&ndash; /Blog Widget &ndash;&gt;

                                            &lt;!&ndash; Blog Widget &ndash;&gt;
                                            <div class="widget">
                                                <h3 class="widget-title underlined">Categories</h3>
                                                <div class="widget-body widget_categories">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                News<span>8</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                Design<span>25</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                Technology<span>12</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                Inspiration<span>16</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            &lt;!&ndash; /Blog Widget &ndash;&gt;

                                            &lt;!&ndash; Blog Widget &ndash;&gt;
                                            <div class="widget">
                                                <h3 class="widget-title underlined">Tag Cloud</h3>
                                                <div class="widget-body widget_tag_cloud">
                                                    <a href="#">News</a>
                                                    <a href="#">Design</a>
                                                    <a href="#">Photography</a>
                                                    <a href="#">Technology</a>
                                                    <a href="#">Bootstrap</a>
                                                    <a href="#">News</a>
                                                    <a href="#">Design</a>
                                                    <a href="#">Photography</a>
                                                    <a href="#">Technology</a>
                                                    <a href="#">Bootstrap</a>
                                                    <a href="#">News</a>
                                                    <a href="#">Design</a>
                                                    <a href="#">Photography</a>
                                                    <a href="#">Technology</a>
                                                    <a href="#">Bootstrap</a>
                                                </div>
                                            </div>
                                            &lt;!&ndash; /Blog Widget &ndash;&gt;


                                            &lt;!&ndash; Widget recent posts &ndash;&gt;
                                            <div class="widget">
                                                <h3 class="widget-title underlined">Popular Posts</h3>
                                                <div class="widget-body widget-recent-posts">

                                                    <div class="w-post">
                                                        <div class="w-post-image">
                                                            <a href="blog-single.html"><img src="../assets/img/blog/b00-t.jpg" alt="image"></a>
                                                        </div>
                                                        <div class="w-post-content">
                                                            <a href="blog-single.html">
                                                                <span class="date">08 Feb , 2014</span>
                                                                <br>
                                                                <p>w-Post with a Featured Image</p>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="w-post">
                                                        <div class="w-post-image">
                                                            <a href="blog-single.html"><img src="../assets/img/blog/b03-t.jpg" alt="image"></a>
                                                        </div>
                                                        <div class="w-post-content">
                                                            <a href="blog-single.html">
                                                                <span class="date">08 Feb , 2014</span>
                                                                <br>
                                                                <p>w-Post with a Featured Image</p>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="w-post">
                                                        <div class="w-post-image">
                                                            <a href="blog-single.html"><img src="../assets/img/blog/b01-t.jpg" alt="image"></a>
                                                        </div>
                                                        <div class="w-post-content">
                                                            <a href="blog-single.html">
                                                                <span class="date">08 Feb , 2014</span>
                                                                <br>
                                                                <p>w-Post with a Featured Image</p>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="w-post">
                                                        <div class="w-post-image">
                                                            <a href="blog-single.html"><img src="../assets/img/blog/b02-t.jpg" alt="image"></a>
                                                        </div>
                                                        <div class="w-post-content">
                                                            <a href="blog-single.html">
                                                                <span class="date">08 Feb , 2014</span>
                                                                <br>
                                                                <p>Post with a Featured Image</p>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            &lt;!&ndash;/ Widget recent posts &ndash;&gt;

                                        </div>
                                    </div>

                                    &lt;!&ndash; Blog navigation &ndash;&gt;
                                    <hr/>
                                    <div id="post-nav">
                                        <a class="prev-post btn btn-lg btn-simple" href="#">Prev</a>
                                        <a class="prev-post btn btn-lg btn-simple pull-right" href="#">Next</a>
                                    </div>
                                    &lt;!&ndash;/ Blog navigation &ndash;&gt;

                                    <hr/>
                                    <a class="back-to-top" href="#"></a>-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Page main wrapper -->
@endsection

@section("scripts")

@endsection
