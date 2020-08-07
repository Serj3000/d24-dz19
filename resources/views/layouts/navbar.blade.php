    <!-- Navbar Area -->
        <div class="foode-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar" id="foodeNav">

                        <!-- Nav brand -->
                        <a href="{{route('index.blog')}}" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{route('index.blog')}}">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('index.blog')}}">Home</a></li>
                                            <li><a href="{{route('archive.blog')}}">Archive Blog</a></li>
                                            {{-- @foreach(\App\Post::latest('created_at')->paginate(1) as $sing) @endforeach --}}
                                            @foreach(\App\Post::latest('created_at')->paginate(1) as $sing) @endforeach
                                            <li><a href="{{route('single-post.blog', ['id'=>$sing->id])}}">Single Post</a></li><!--single-post.html-->
                                            <li><a href="{{route('about-us.blog')}}">About</a></li>
                                            <li><a href="{{route('contact.blog')}}">Contact</a></li>
                                            <li><a href="{{route('typography.blog')}}">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Catagories</a>
                                        <div class="megamenu">
                                            <ul class="dropdown">

                                                @foreach($categories as $category)
                                                    <li><a href="{{route('category.blog', ['id'=>$category->id, 'slug'=>$category->slug])}}">- {{$category->name}}</a></li>
                                                @endforeach
                                                {{-- <li><a href="#">- Features</a></li>
                                                <li><a href="#">- Food</a></li>
                                                <li><a href="#">- Travel</a></li>
                                                <li><a href="#">- Recipe</a></li>
                                                <li><a href="#">- Bread</a></li>
                                                <li><a href="#">- Breakfast</a></li>
                                                <li><a href="#">- Meat</a></li>
                                                <li><a href="#">- Fastfood</a></li>
                                                <li><a href="#">- Salad</a></li>
                                                <li><a href="#">- Soup</a></li> --}}
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{route('welcome.laravel')}}">Laravel</a></li>
                                    <li><a href="{{route('about-us.blog')}}">About</a></li>
                                    <li><a href="{{route('contact.blog')}}">Contact</a></li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
