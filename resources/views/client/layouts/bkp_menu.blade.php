<!--Offcanvas menu area start-->
<div id="showLeftPush1" class="off_canvars_overlay"></div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open canvas4_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div id="showLeftPush2" class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div id="menu" class="text-start ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="{{ url('shop/new_arrival/new_arrival') }}">New arrival</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('shop/winter/winter') }}">Winter</a>
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
                                <a href="#"> Gift Voucher</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('shop') }}"> Shop</a>
                            </li>

                        </ul>
                    </div>
                    {{--                    <div class="Offcanvas_footer">--}}
                    {{--                        <span><a href="#"><i class="fa fa-envelope-o"></i> demo@example.com</a></span>--}}
                    {{--                        <ul>--}}
                    {{--                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                    {{--                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                    {{--                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>--}}
                    {{--                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                    {{--                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->

<div id="shopify-section-header" class="shopify-section">
    <header class="site-header" role="banner">
        <div class="header-bottom">
            <div class="header-mobile">
                <div class="container">
                    <div class="row">
                        <div class="opt-area"></div>
                        <div class="customer-area dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="{{ route('login.website') }}">Account</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <ul class="customer-links">
                                    <li class="dropdown ct_login">
                                        @if(Auth::check())
                                            <a class="login visible-xs" href="{{ route('client.account') }}">
                                                My Account
                                            </a>
                                        @else
                                            <a class="login visible-xs" href="{{ route('login.website') }}">
                                                Sign In
                                            </a>
                                        @endif
                                        <div class="dropdown-menu shadow" role="menu" aria-labelledby="dLabel">
                                            {{--                                            <h6 class="login-header" data-translate="customer.login.sign_in">--}}
                                            {{--                                                Sign In--}}
                                            {{--                                            </h6>--}}
                                            {{--                                            <form class="form-login" accept-charset="UTF-8" action="{{ route('register.website') }}"--}}
                                            {{--                                                  method="post">--}}
                                            {{--                                                @csrf--}}
                                            {{--                                                <input name="form_type" type="hidden" value="customer_login">--}}
                                            {{--                                                <input name="utf8" type="hidden" value="✓">--}}
                                            {{--                                                <label for="customer_email" data-translate="customer.login.email">Email--}}
                                            {{--                                                    Address<em>*</em></label>--}}
                                            {{--                                                <input type="email" value="" name="customer[email]">--}}
                                            {{--                                                <label for="customer_password" data-translate="customer.login.password">Password<em>*</em></label>--}}
                                            {{--                                                <input type="password" value="" name="customer[password]">--}}
                                            {{--                                                <div class="action-btn">--}}
                                            {{--                                                    <input type="submit" data-translate="customer.login.login"--}}
                                            {{--                                                           class="btn-secondary" value="Login">--}}
                                            {{--                                                    <p class="text-center"><a href="javascript:void(0)"--}}
                                            {{--                                                                              data-translate="customer.login.forgot_password">Forgot--}}
                                            {{--                                                            your password?</a>--}}
                                            {{--                                                    </p>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="new-customer">--}}
                                            {{--                                                    <a href="javascript:void(0)" class="btn"--}}
                                            {{--                                                       data-translate="layout.customer.create_account">Create--}}
                                            {{--                                                        Account</a>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </form>--}}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header Mobile  -->
            <div class="header-panel-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4  free-shipping">
                            <span class="free_shipping lang1"></span>
                        </div>
                        <div class="col-xs-4 text-center top-message">
                            <p class="top_message lang1" style="text-align: center !important;">FREE SHIPPING ALL ACROSS
                                THE COUNTRY!</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container header-panel-bottom" style="padding: 0 50px 0 35px !important;">
                <div class="row">
                    <div class="header-panel">
                        <a href="{{ route('client.account') }}" class="account-icon">
                            <svg width="25px" height="25px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                 fill="#fff">
                                <path
                                    d="M16 7.992C16 3.58 12.416 0 8 0S0 3.58 0 7.992c0 2.43 1.104 4.62 2.832 6.09.016.016.032.016.032.032.144.112.288.224.448.336.08.048.144.111.224.175A7.98 7.98 0 0 0 8.016 16a7.98 7.98 0 0 0 4.48-1.375c.08-.048.144-.111.224-.16.144-.111.304-.223.448-.335.016-.016.032-.016.032-.032 1.696-1.487 2.8-3.676 2.8-6.106zm-8 7.001c-1.504 0-2.88-.48-4.016-1.279.016-.128.048-.255.08-.383a4.17 4.17 0 0 1 .416-.991c.176-.304.384-.576.64-.816.24-.24.528-.463.816-.639.304-.176.624-.304.976-.4A4.15 4.15 0 0 1 8 10.342a4.185 4.185 0 0 1 2.928 1.166c.368.368.656.8.864 1.295.112.288.192.592.24.911A7.03 7.03 0 0 1 8 14.993zm-2.448-7.4a2.49 2.49 0 0 1-.208-1.024c0-.351.064-.703.208-1.023.144-.32.336-.607.576-.847.24-.24.528-.431.848-.575.32-.144.672-.208 1.024-.208.368 0 .704.064 1.024.208.32.144.608.336.848.575.24.24.432.528.576.847.144.32.208.672.208 1.023 0 .368-.064.704-.208 1.023a2.84 2.84 0 0 1-.576.848 2.84 2.84 0 0 1-.848.575 2.715 2.715 0 0 1-2.064 0 2.84 2.84 0 0 1-.848-.575 2.526 2.526 0 0 1-.56-.848zm7.424 5.306c0-.032-.016-.048-.016-.08a5.22 5.22 0 0 0-.688-1.406 4.883 4.883 0 0 0-1.088-1.135 5.207 5.207 0 0 0-1.04-.608 2.82 2.82 0 0 0 .464-.383 4.2 4.2 0 0 0 .624-.784 3.624 3.624 0 0 0 .528-1.934 3.71 3.71 0 0 0-.288-1.47 3.799 3.799 0 0 0-.816-1.199 3.845 3.845 0 0 0-1.2-.8 3.72 3.72 0 0 0-1.472-.287 3.72 3.72 0 0 0-1.472.288 3.631 3.631 0 0 0-1.2.815 3.84 3.84 0 0 0-.8 1.199 3.71 3.71 0 0 0-.288 1.47c0 .352.048.688.144 1.007.096.336.224.64.4.927.16.288.384.544.624.784.144.144.304.271.48.383a5.12 5.12 0 0 0-1.04.624c-.416.32-.784.703-1.088 1.119a4.999 4.999 0 0 0-.688 1.406c-.016.032-.016.064-.016.08C1.776 11.636.992 9.91.992 7.992.992 4.14 4.144.991 8 .991s7.008 3.149 7.008 7.001a6.96 6.96 0 0 1-2.032 4.907z"></path>
                            </svg>
                        </a>

                        <div class="top-header ">
                            <div class="wrapper-top-cart">

                                <p class="top-cart" style="margin-left: 2px;">
                                    <a href="javascript:void(0)" id="cartToggle" >
                                        <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                        <span class="first" data-translate="cart.general.shopping_cart"></span>
                                        <span id="cartCount" class="cart-count" >1</span>
                                    </a>
                                </p>
                                <p class="top-cart top-wishlist">
                                    <a href="{{ url('/wishlist') }}" id="">
                                        <span class="icon"><i class="fa fa-heart" aria-hidden="true"></i></span>
                                        <span class="first" data-translate="cart.general.shopping_cart"></span>
                                        <span id="cartCount" class="cart-count wishlist-count">1</span>
                                    </a>
                                </p>


                                <div id="dropdown-cart" style="display:none" class="shadow">
                                    <div class="no-items" id="noItems" style="text-align: center !important;">
                                        <p>Your cart is currently empty.</p>
                                        <p class="text-continue">
                                            <a href="{{ route('client.shop') }}">Continue Shopping</a>
                                        </p>
                                    </div>
                                    <div class="has-items">
                                        <ol class="mini-products-list">

                                        </ol>

                                        <div class="summary">
                                            <p class="total">
                                                <span class="label"><span data-translate="cart.label.total">Total</span>:</span>
                                                <span class="price cart-total-price">৳ 0</span>
                                            </p>
                                        </div>
                                        <div class="actions">
                                            <a class="btn" href="{{ route('client.checkout') }}"
                                               data-translate="cart.general.checkout">Checkout Now
                                            </a>
                                        </div>
                                        <p class="text-cart"><a href="{{ route('cart.index') }}"
                                                                data-translate="cart.general.view_cart">Or
                                                View Cart</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Top Header -->
                        <ul class="customer-links">
                            <li class="dropdown ct_login">
                                @if(Auth::check())
                                    <a class="login visible-xs" href="{{ route('client.account') }}">
                                        My Account
                                    </a>
                                @else
                                    <a class="login visible-xs" href="{{ route('login.website') }}">
                                        Sign In
                                    </a>
                                @endif


                                <!--                                <a class="login hidden-xs" href="javascript:void(0)" data-toggle="dropdown"-->
                                <!--                                   data-translate="customer.login.sign_in">Sign In</a>-->
                                <!--                                <a id="customer_register_link" class="visible-xs" href="/account/register"-->
                                <!--                                   data-translate="layout.customer.create_account">Create Account</a>-->

                                <div class="dropdown-menu shadow" role="menu" aria-labelledby="dLabel">
                                    {{--                                    <h6 class="login-header">Sign In</h6>--}}
                                    {{--                                    <form class="form-login" accept-charset="UTF-8" action="{{ route('register.website') }}"--}}
                                    {{--                                          method="post">--}}
                                    {{--                                        <input name="form_type" type="hidden" value="customer_login">--}}
                                    {{--                                        <input name="utf8" type="hidden" value="✓">--}}
                                    {{--                                        <label for="customer_email" data-translate="customer.login.email">Email--}}
                                    {{--                                            Address<em>*</em></label>--}}
                                    {{--                                        <input type="email" value="" name="customer[email]">--}}
                                    {{--                                        <label for="customer_password" data-translate="customer.login.password">Password<em>*</em></label>--}}
                                    {{--                                        <input type="password" value="" name="customer[password]">--}}
                                    {{--                                        <div class="action-btn">--}}
                                    {{--                                            <input type="submit" data-translate="customer.login.login"--}}
                                    {{--                                                   class="btn-secondary" value="Login">--}}
                                    {{--                                            <p class="text-center"><a href="#"--}}
                                    {{--                                                                      data-translate="customer.login.forgot_password">Forgot--}}
                                    {{--                                                    your password?</a>--}}
                                    {{--                                            </p>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="new-customer">--}}
                                    {{--                                            <!--                                            <a href="/account/register" class="btn"-->--}}
                                    {{--                                            <!--                                               data-translate="layout.customer.create_account">Create Account</a>-->--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </form>--}}
                                </div>
                            </li>
                        </ul>
                        <div class="menu-block text-center visible-phone">
                            <!-- start Navigation Mobile  -->
                            <div id="showLeftPush" class=""><i class="fa fa-bars"></i></div>
                        </div>
                        <!-- end Navigation Mobile  -->
                        <div class="header-logo-fix">
                            <a href="/">
                            </a>
                        </div>
                        <h1 class="header-logo col-xs-3" itemscope="" itemtype="http://schema.org/Organization">
                            <a href="{{ route('client.home') }}"><img src="@if ($company->logo)
                                    {{asset('images/company/'.$company->logo)}}
                                @endif"alt="logo"></a>
                        </h1>
                        <!--header-logo-->
                        <div class="header-search">
                            <div class="nav-search dropdown">
                                <a class="icon-search dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"><i
                                        class="fa fa-search"></i></a>
                                <div class="dropdown-menu">
                                    <form action="{{ route('searchPage') }}" method="get" class="input-group search-bar"
                                          role="search">
                                        {{--                                        <input type="hidden" name="type" value="product">--}}
                                        <input type="text" name="keyword" value=""
                                               translate-item="placeholder" placeholder="Search entire store"
                                               class="input-group-field" autocomplete="off" autocapitalize="off"
                                               autocorrect="off" spellcheck="false">
                                        <button type="submit" class="btn-search">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!------end header search---------->
                    </div>
                    <div class="nav-search-mb">
                        <form action="{{ route('searchPage') }}" method="get" class="input-group search-bar"
                              role="search">
                            {{--                            <input type="hidden" name="type" value="product">--}}
                            <input type="text" name="keyword" value=""
                                   translate-item="placeholder" placeholder="Search entire store"
                                   class="input-group-field" autocomplete="off" autocapitalize="off" autocorrect="off"
                                   spellcheck="false">
                            <button type="submit" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
        window.dropdowncart_type = "hover";
    </script>
    <style>
        .header-bottom .top-cart {
            border: solid 1px #61656b;
        }

        .header-bottom .top-cart #cartCount {
            background: #ffffff;
            color: #000;
        }

        .right-header-top {
            padding-right: 0px;
        }

        .header-panel-top, .header-mobile {
            background: #3c3c3c;
        }

        .free-shipping {
            text-align: left;
            padding: 0;
            font-size: 12px;
            font-weight: 400;
        }

        .header-bottom {
            background: #000000;
        }

        .header-bottom .selectize-control.single .selectize-input:after {
            border-top-color: ;
        }

        .top-message a,
        .top-message {
            color: #fcd700;
        }

        /*   .header-bottom .top-cart a span.first:hover,
        .customer-links a:hover { border-bottom: 1px solid #ffffff; }
        */
        .header-bottom .top-cart a span,
        .customer-links a,
        .customer-links,
        .customer-links li.wishlist .fa-heart,
        .header-bottom .selectize-input,
        .header-bottom .selectize-input input,
        .customer-area a,
        .menu-block a, .nav-search .icon-search {
            color: #ffffff;
        }

        .header-mobile .customer-area a,
        .icon-search .fa-search,
        .header-bottom .selectize-dropdown,
        .header-bottom .selectize-control div.item,
        .customer-area .dropdown-menu a, .free-shipping {
            color: #000000;
        }

        .search-bar input.input-group-field::placeholder, .header-bottom .search-bar input.input-group-field {
            color: #000;
        }

        .header-bottom.on .top-cart a span.first,
        .header-bottom .nav-search-fix .icon-search,
        .header-bottom.on .top-cart a span.first {
            border-color: ;
        }

        .header-logo a img,
        .header-logo {
            max-height: 40px;
        }

        ul.customer-links li .dropdown-menu, #dropdown-cart {
            border-color:;
        }

        .nav-search-mb .btn-search,
        .header-bottom .dropdown-menu .btn-search {
            background: #ffffff;
            color: #ffffff;
            color: #000;
        }

        .phone-number {
            background: #f6740a;
            color: #ffffff;
        }

        .phone-number .fa-phone-square {
            color: #ffffff;
        }

        @media (max-width: 1024px) {
            .header-panel-bottom {
                background: #000000;
            }
        }
    </style>
</div>

<div class="header_middle sticky-header customStickyHeader">
    <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
            <div class="main_menu menu_position text-center">
                <nav style="text-align: center;">
                    <ul>
                        <li><a href="{{ url('shop/new_arrival/new_arrival') }}">New arrival</a></li>
                        <li class="customSeparator"></li>
                        <li><a href="{{ url('shop/winter/winter') }}">Winter</a></li>
                        <li class="customSeparator"></li>
                        @if (App\Models\Catalogue::with('category')->get())
                            @foreach (App\Models\Catalogue::with('category')->get()->all() as $catalogue)
                                <li><a href="{{ url('shop/catalogue/'.$catalogue->id) }}">{{ $catalogue->name }} <i
                                            class="fa fa-angle-down"></i></a>
                                    @if ($catalogue->category)
                                        <ul>
                                            @foreach ($catalogue->category as $category)
                                                <li class="subCatL1">
                                                    @if(count($category->subcategories) > 0)
                                                        <a href="{{ url('shop/category/'.$category->id) }}"
                                                           style="padding-top: 10px; padding-bottom: 0px; font-family: Rubik">
                                                            {{ ucwords($category->name) }}
                                                            <i class="fa fa-angle-right"></i>
                                                            @else
                                                                <a href="{{ url('shop/category/'.$category->id) }}"
                                                                   style="padding-top: 10px; padding-bottom: 10px;">
                                                                    {{ ucwords($category->name) }} </a>
                                                            @endif

                                                            @if ($category->subcategories)
                                                                <ul>
                                                                    @foreach ($category->subcategories as $subcategory)
                                                                        <li>
                                                                            <a href="{{ url('shop/category/'.$subcategory->id) }}"
                                                                               class="subCatL2">{{ $subcategory->name }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                                <li class="customSeparator"></li>
                            @endforeach
                            <li><a href="javascript:void(0)">GIFT VOUCHER</a></li>
                            <li><a href="{{ url('shop') }}"> SHOP</a></li>
                        @endif
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
