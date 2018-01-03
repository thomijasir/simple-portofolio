@extends("layouts.app")

@section("page-wrap")
    <!-- Page main wrapper -->
    <div id="main-content" class="blog-list"> <!-- attention to the classname -->
        <div class="page-wrapper regular-page">

            <div class="container">
                <div class="row text-center " id="password-action">
                    <br>
                    <div class="col-md-10 col-lg-offset-1">
                        <p>Protected page, require password to see the content or ask the owener Thankyou</p>

                        <div class="form-group">
                            <label class="sr-only" for="pwd">Access Password:</label>
                            <input type="text" class="form-control" id="pwd">
                        </div>

                        <input type="submit" class="form-control" onclick="passwordCheck()" value="SHOW">
                    </div>
                </div>
                <div id="content-profile" style="display: none">

                    <!-- page title -->
                    <h2 class="section-title double-title">
                        Details Profile
                    </h2>
                    <!--/ page title -->

                    <div class="row mb-large">
                        <!-- main blog list content -->
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-5">
                                    <p>Programming, Business, and fitness is my fashion, I really love learning new things, find solutions in every logical code, do business and the important thing I do love exercise to keep healthy and can live a better life.</p>
                                </div>
                                <div class="col-md-7">
                                    <ul>
                                        <li>Bandung, March 5, 1997</li>
                                        <li>Indonesia</li>
                                        <li>Single</li>
                                        <li>Islam</li>
                                        <li>Programming, Business, Multimedia, Fitness & Travel</li>
                                        <li>Confidence, Fast learner a new thing and Discipline</li>
                                        <li>Not easy to trust other people</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="small-title-section">
                                INTERNSHIP EXPERIENCE
                            </h3>

                            <div class="row">
                                <div class="col-md-4">
                                    <p>MEI.2016 – JUL.2016</p>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="sub-small-title">TELEKOMUNIKASI INDONESIA TBK (TELKOM BALI)</h4>
                                    <p class="sub-small-desc">Business Service & Analytic</p>
                                    <ul>
                                        <li>Telkom's Customer Analysis in Business sector</li>
                                        <li>Manage Account Manager</li>
                                        <li>Creating Telkom Revenue Application (Automatic Data Processing</li>
                                        <li>Learn the Behavior of business sector customers</li>
                                    </ul>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>MEI.2016 – JUL.2016</p>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="sub-small-title">Mediawave</h4>
                                    <p class="sub-small-desc">Web Developer</p>
                                    <ul>
                                        <li>Telkom's Customer Analysis in Business sector</li>
                                        <li>Manage Account Manager</li>
                                        <li>Creating Telkom Revenue Application (Automatic Data Processing</li>
                                        <li>Learn the Behavior of business sector customers</li>
                                    </ul>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>MEI.2016 – JUL.2016</p>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="sub-small-title">Mediawave</h4>
                                    <p class="sub-small-desc">Data Analysist</p>
                                    <ul>
                                        <li>Telkom's Customer Analysis in Business sector</li>
                                        <li>Manage Account Manager</li>
                                        <li>Creating Telkom Revenue Application (Automatic Data Processing</li>
                                        <li>Learn the Behavior of business sector customers</li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="small-title-section">
                                BUSINESS EXPERIENCE
                            </h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>MEI.2016 – JUL.2016</p>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="sub-small-title">Mediawave</h4>
                                    <p class="sub-small-desc">Data Analysist</p>
                                    <ul>
                                        <li>Telkom's Customer Analysis in Business sector</li>
                                        <li>Manage Account Manager</li>
                                        <li>Creating Telkom Revenue Application (Automatic Data Processing</li>
                                        <li>Learn the Behavior of business sector customers</li>
                                    </ul>
                                </div>
                            </div>

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
    </div>
    <!--/Page main wrapper -->
@endsection

@section("scripts")
    <script type="text/javascript">
        function passwordCheck() {
            var form = document.getElementById("pwd").value;
            var codeacces = 123;
            if(form != codeacces){
                alert('Code Access Wrong!');
            }else{
                document.getElementById("content-profile").style.display = "block";
                document.getElementById("password-action").style.display = "none";
            }



        }
    </script>
@endsection
