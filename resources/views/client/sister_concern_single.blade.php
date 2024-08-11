@include('client.layouts.header')
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
                            <a href="{{ route('client.home') }}"><img
                                    src="{{asset('images/golden-jute/logo/logo.jpg')}}" alt="logo"></a>
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
                            <a href="{{ route('client.home') }}"><img
                                    src="{{asset('images/golden-jute/logo/logo.jpg')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="main_menu menu_position text-center">
                            <nav>
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('client.home') }}">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('categorypage') }}">All Category</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('about_us') }}">About</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Sister Concern</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Clients</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('gallery') }}">Gallery</a>
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
                                        <a href="{{ route('about_us') }}">About</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('sister_concern')}}">Sister Concern</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Clients</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('gallery') }}">Gallery</a>
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

<!-- sister consern banner start -->
<section class="sister_concern">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sister_concern_banner_img">
                    <img src="{{asset('images/golden-jute/sister_concern/banner.jpg')}}">
                </div>
            </div>
        </div>
</section>
<!-- sister consern banner end -->

<!-- sister concern single product start -->
<section claas="sister_concern_produt_section">
    <div class="container">
        <div class="concern_title">
            <h2>GOLDEN JUTE PRODUCT</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="product_part">
                    <img class="img-fluid w-100"
                        src="{{asset('images/golden-jute/sister_concern/golden_jute_product.jpg')}}">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="product_description">
                    <div class="product_des_sing">
                        <p>Golden Jute Product is a pioneer jute basket manufacturer and exporter of jute storage
                            basket, Laundry basket, Fruit basket, Nursery pot, Jewelry box which have an ecologically
                            sustainable future. Golden Jute Product also produce different type of Bags, Rugs, Floor
                            Mat, Table Mat and Handicrafts of different sizes and different color according to customer
                            needs.</p>
                    </div>
                    <div class="product_des_sing">
                        <p>Golden Jute Product has its own facility of production. We have about 1000 highly experienced
                            workers who are responsible for our production. Most of these women have minimal education
                            but they are skilled and well trained. They manage to earn a steady income for their
                            families and themselves. These women play a very important role in poverty eradication and
                            improving their overall level of living. Our production capacity 200,000 set of basket (S/3)
                            per month. This company is located at the Savar, Dhaka, Bangladesh.</p>
                    </div>
                    <div class="product_des_sing">
                        <p>Our Vision: The aim of golden Jute Product is to maintain a business that can produce high
                            quality jute diversified products but have a minimal impact on our environment. Quality and
                            timely delivery with proper packaging of the products to give complete satisfaction to all
                            the patrons, both home and abroad is also ensured. We believe Quality and commitment.</p>
                    </div>
                    <div class="product_des_sing">
                        <p>Our Goal: Bangladesh is the leading jute producer country in the world. The quality of our
                            jute is excellent. It has a golden history. We are committed to produce large scale of high
                            quality finished jute products and create an international market of jute products in
                            Bangladesh.</p>
                    </div>
                    <div class="product_des_sing">
                        <p>Our Commitment: We are committed to ensure that we do not employ child labor in our
                            factories, no workers are forced to work and employees are paid living wages. No
                            discrimination is practices, working environment is safe and hygienic and regular employment
                            is provided.</p>
                    </div>
                    <div class="product_des_sing">
                        <p>The Company has 3 factory sheds and more than 20 sub center with a surface of approximately
                            300000 Square meters with expertise and conducive working conditions. In compliance with
                            this strategy, the Company has made seagrass basket, jute rope, jute tape, jute fabric,
                            colored and printed burlap ribbon, jute shopping, and Christmas bags, jute gift bags, etc.
                            The Company makes numerous jute items such as jute cords, bag burlap rolls, ribbon burlap
                            bags, bags of drawstrings, Christmas bags, table tops, table runners, placemat food bags,
                            etc. A wide variety of colors that have been developed in jute goods add glamour and
                            affectation. We hope you will not ignore purchasing certain things in your home and garden
                            that have an artistic effect. We also supplied new products to</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sister concern single product end -->

<!-- section product list start -->
<section class="concern_product_list">
    <div class="container">
        <div class="concern_title"></div>
        <h2>GOLDEN JUTE PRODUCT LIST</h2>
    </div>
    <div class="product_category_wrap">
        <div class="row">
            <div class="col-lg-3">
                <div class="product_category_image">
                    <img class="img-fluid" src="{{asset('images/golden-jute/category_image/category_image.jpg')}}">
                    <div class="category_image_title">
                        <h5>Burrlap Roll</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_category_image">
                    <img class="img-fluid" src="{{asset('images/golden-jute/category_image/category_img2.jpg')}}">
                    <div class="category_image_title">
                        <h5>Date laf Basket</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_category_image">
                    <img class="img-fluid" src="{{asset('images/golden-jute/category_image/category_img3.jpg')}}">
                    <div class="category_image_title">
                        <h5>Hessian Cloth</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_category_image">
                    <img class="img-fluid" src="{{asset('images/golden-jute/category_image/category_img4.jpg')}}">
                    <div class="category_image_title">
                        <h5>Hyacin basket</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_category_image">
                    <img class="img-fluid" src="{{asset('images/golden-jute/category_image/category_img_5.jpg')}}">
                    <div class="category_image_title">
                        <h5>jute bag</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_category_image">
                    <img class="img-fluid" src="{{asset('images/golden-jute/category_image/category_img-6.jpg')}}">
                    <div class="category_image_title">
                        <h5>jute basket</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_category_image">
                    <img class="img-fluid" src="{{asset('images/golden-jute/category_image/category_image_7.jpg')}}">
                    <div class="category_image_title">
                        <h5>jute Cadies</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_category_image">
                    <img class="img-fluid" src="{{asset('images/golden-jute/category_image/category_img-8.jpg')}}">
                    <div class="category_image_title">
                        <h5>jute Rope</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section product list end -->

@include('client.layouts.footer')
