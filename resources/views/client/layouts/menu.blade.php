<!--Offcanvas menu area start-->
<div class="off_canvars_overlay"></div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="search_container">
                        <form action="{{ route('searchPage') }}" method="get">
                            <div class="search_box">
                                <input name="keyword" autocorrect="off" placeholder="Search product..." type="text">
                                <button type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                    <div id="menu" class="text-start ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="{{ route('client.home') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('shop') }}">Shop</a>
                            </li>

                            @foreach (App\Models\Catalogue::with('category')->get()->all() as $catalogue)
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0)">{{ $catalogue->name }}</a>
                                    @if ($catalogue->category)
                                        <ul class="sub-menu">
                                            @foreach ($catalogue->category as $category)
                                                <li class="menu-item-has-children">
                                                    <a href="{{ url('shop/category/'.$category->id) }}">{{ $category->name }}</a>
                                                    @if (count($category->subcategories) > 0)
                                                        <ul class="sub-menu">
                                                            @foreach ($category->subcategories as $subcategory)
                                                                <li>
                                                                    <a href="{{ url('shop/category/'.$subcategory->id) }}">{{ $subcategory->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach

                            <li class="menu-item-has-children">
                                <a href="{{ route('client.account') }}">my account</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->
<!-- secondary header start -->
 <header>
        <div class="main_header header_four">
            <div class="container">
                <!--header top start-->
                <div class="header_top">
                    <div class="row">
                        <div class="col-lg-12 col-md-7">
                            <div class="header_top_settings">
                                <ul>
                                    
                                    <li>Hotline: <a href="tel:{{ $company->phone }}">{{ $company->phone }} </a></li>
                                    <li><a href="#">GOLDEN JUTE</a></li>
                                    <li>Email:info@goldenjutebd.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header top start-->

                <!--header middel start-->
                <div class="header_middle header_middle_style4">
                    <div class="row align-items-center">
                        <div class="column1 col-lg-3 col-md-3 col-4">
                            <div class="logo">
                            <a href="{{ route('client.home') }}"><img src="{{asset('images/golden-jute/logo/logo.jpg')}}"alt="logo"></a>
                            </div>
                        </div>
                        <div class="column2 col-lg-6 col-md-12">
                            <div class="search_container">
                                <form action="{{ route('searchPage') }}" method="get">
                                    <div class="search_box">
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="column3 col-lg-3 col-md-7 col-6">
                            <div class="header_configure_area header_configure_four">
                                <div class="header_login">
                                    <a href="{{ route('login.website') }}">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span class="cart_price">login</span>

                                    </a>
                                </div>
                                <div class="header_wishlist">
                                    <a href="{{ url('/wishlist') }}"><i class="ion-android-favorite-outline"></i>
                                        <span class="wishlist_count">0</span>
                                    </a>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-shopping-bag"></i>
                                        <span class="cart_count">0</span>

                                    </a>
                                    <!--mini cart-->
                                    @includeIf('client.layouts._mini_cart')
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header middel start-->
                <div class="header_middle sticky_header_four sticky-header">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-6">
                        <div class="logo">
                        <a href="{{ route('client.home') }}"><img src="{{asset('images/golden-jute/logo/logo.jpg')}}"alt="logo"></a>
                        </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="main_menu menu_position text-center">
                                <nav>
                                    <ul>
                                    <li class="menu-item-has-children">
                                <a href="#">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">All Category</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">About</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Sister Concern</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Clients</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Gallery</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Contact</a>
                            </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- <div class="col-lg-2">
                        <div class="search_container">
                                <form action="{{ route('searchPage') }}" method="get">
                                    <div class="search_box">
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                        <div class="col-lg-3">
                            <div class="header_configure_area">
                                <div class="header_login">
                                    <a href="{{ route('login.website') }}">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span class="cart_price">login</span>

                                    </a>
                                </div>
                                <div class="header_wishlist">
                                    <a href="href={{ url('/wishlist') }}"><i class="ion-android-favorite-outline"></i>
                                        <span class="wishlist_count">0</span>
                                    </a>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-shopping-bag"></i>
                                        <span class="cart_count">0</span>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header middel end-->
                <!--header bottom satrt-->
                <div class="header_bottom">
                    <div class="row align-items-center">
                        <div class="column1 col-lg-3 col-md-6">
                        @includeIf('client.layouts._all_categories')
                            <div class="search_container">
                                <form action="{{ route('searchPage') }}" method="get">
                                    <div class="search_box">
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="column2 col-lg-9 ">
                            <div class="main_menu menu_four menu_position text-center">
                                <nav>
                                    <ul>
                                    <li class="menu-item-has-children">
                                <a href="{{ route('client.home') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">All Category</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">About</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Sister Concern</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Clients</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Gallery</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Contact</a>
                            </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="column3 col-lg-3 col-md-6">
                        @includeIf('client.layouts._all_categories')
                        </div>
                    </div>
                </div>
                <!--header bottom end-->
            </div>
        </div>
    </header>
<!-- secondary header end -->
