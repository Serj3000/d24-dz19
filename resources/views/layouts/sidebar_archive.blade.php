                <!-- Blog Sidebar Area -->
                    <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                        <div class="post-sidebar-area">

                            <!-- ##### Single Widget Area ##### -->
                            <div class="single-widget-area mt-0">
                                <form class="search-form" action="#" method="post">
                                    <input type="search" name="search" class="form-control" placeholder="Search...">
                                    <button><i class="fa fa-send"></i></button>
                                </form>
                            </div>

                            <!-- ##### Single Widget Area ##### -->
                            <div class="single-widget-area">
                                <!-- Title -->
                                <div class="widget-title">
                                    <h6>About Me</h6>
                                </div>
                                <!-- Thumbnail -->
                                <div class="about-thumbnail">
                                    <img src="img/blog-img/about-me.jpg" alt="">
                                </div>
                                <!-- Content -->
                                <div class="widget-content text-center">
                                    <img src="img/core-img/signature.png" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                </div>
                            </div>

                            <!-- ##### Single Widget Area ##### -->
                            <div class="single-widget-area">
                                <!-- Title -->
                                <div class="widget-title">
                                    <h6>Categories</h6>
                                </div>
                                <ol class="foode-catagories">
                                    @foreach($categories as $category)
                                        {{-- @foreach($category->post as $key ?? ''=>$pos)@endforeach --}}
                                            <li><a href="{{route('category.blog', ['slug'=>$category->slug])}}"><span><i class="fa fa-stop" aria-hidden="true"></i> {{$category->name}}</span>
                                            <?php $key=0; foreach($category->post as $key=>$pos); ?><span>{{$key?$key+1:'0'}}</span></a></li>
                                    @endforeach
                                    {{-- <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> Drink</span> <span>(18)</span></a></li>
                                    <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> Foody</span> <span>(28)</span></a></li>
                                    <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> Tea</span> <span>(15)</span></a></li>
                                    <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> Coffee</span> <span>(27)</span></a></li> --}}
                                </ol>
                            </div>

                            <!-- ##### Single Widget Area ##### -->
                            <div class="single-widget-area">
                                <!-- Title -->
                                <div class="widget-title">
                                    <h6>Latest Posts</h6>
                                </div>

                                <!-- Single Latest Posts -->
                                    @foreach($postys as $post)
                                        <div class="single-latest-post d-flex">
                                            <div class="post-thumb">
                                                <img src="img/blog-img/lp{{$post->image}}.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="{{route('single-post.blog', ['id'=>$post->id])}}" class="post-title">
                                                    <h6>{{$post->title}}</h6>
                                                </a>
                                                {{-- <a href="{{route('archive.blog', ['id'=>$post->user->name])}}" class="post-author"><span>by</span> {{$post->user->name}}</a> --}}
                                                <a href="{{route('autor.blog', ['id'=>$post->user->id])}}" class="post-author"><span>by</span> {{$post->user->name}}</a>
                                            </div>
                                        </div>
                                    @endforeach

                                {{-- <!-- Single Latest Posts -->
                                <div class="single-latest-post d-flex">
                                    <div class="post-thumb">
                                        <img src="img/blog-img/lp1.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="#" class="post-title">
                                            <h6>Weeknight Ponzu Pasta</h6>
                                        </a>
                                        <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                    </div>
                                </div>

                                <!-- Single Latest Posts -->
                                <div class="single-latest-post d-flex">
                                    <div class="post-thumb">
                                        <img src="img/blog-img/lp2.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="#" class="post-title">
                                            <h6>The Most Popular Recipe Last Month</h6>
                                        </a>
                                        <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                    </div>
                                </div>

                                <!-- Single Latest Posts -->
                                <div class="single-latest-post d-flex">
                                    <div class="post-thumb">
                                        <img src="img/blog-img/lp3.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="#" class="post-title">
                                            <h6>A Really Good Chana Masala</h6>
                                        </a>
                                        <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                    </div>
                                </div>

                                <!-- Single Latest Posts -->
                                <div class="single-latest-post d-flex">
                                    <div class="post-thumb">
                                        <img src="img/blog-img/lp4.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="#" class="post-title">
                                            <h6>Spicy Instant Pot Taco Soup</h6>
                                        </a>
                                        <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                    </div>
                                </div>

                                <!-- Single Latest Posts -->
                                <div class="single-latest-post d-flex">
                                    <div class="post-thumb">
                                        <img src="img/blog-img/lp5.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="#" class="post-title">
                                            <h6>Lime Leaf Miso Soup</h6>
                                        </a>
                                        <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                    </div>
                                </div> --}}

                            </div>

                            <!-- ##### Single Widget Area ##### -->
                            <div class="single-widget-area">
                                <!-- Adds -->
                                <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                            </div>

                            <!-- ##### Single Widget Area ##### -->
                            <div class="single-widget-area">
                                <!-- Title -->
                                <div class="widget-title">
                                    <h6>Archives</h6>
                                </div>
                                <ol class="foode-archives">
                                    <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> January 2018</span></a></li>
                                    <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> February 2018</span></a></li>
                                    <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> March 2018</span></a></li>
                                    <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> April 2018</span></a></li>
                                    <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> May 2018</span></a></li>
                                </ol>
                            </div>

                            <!-- ##### Single Widget Area ##### -->
                            <div class="single-widget-area">
                                <!-- Title -->
                                <div class="widget-title">
                                    <h6>popular tags</h6>
                                </div>
                                <!-- Tags -->
                                <ol class="popular-tags d-flex flex-wrap">
                                    @foreach($tags as $tagi)
                                        <li><a href="{{route('tag.blog', ['id'=>$tagi->id])}}">{{$tagi->name}}</a></li>
                                    @endforeach
                                    {{-- <li><a href="#">Creative</a></li>
                                    <li><a href="#">Unique</a></li>
                                    <li><a href="#">Template</a></li>
                                    <li><a href="#">Photography</a></li>
                                    <li><a href="#">travel</a></li>
                                    <li><a href="#">lifestyle</a></li>
                                    <li><a href="#">Wordpress Template</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">Idea</a></li> --}}
                                </ol>
                            </div>

                        </div>
                    </div>