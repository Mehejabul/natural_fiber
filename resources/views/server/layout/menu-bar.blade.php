    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon bx bx-menu"></i></a></li>
                        </ul>

                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block">

                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">

                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                    class="ficon bx bx-fullscreen"></i></a></li>
{{--                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i--}}
{{--                                    class="ficon bx bx-search"></i></a>--}}
{{--                        </li>--}}

                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name">{{ ucwords(Auth::guard('web')->user()->name) }}</span><span
                                        class="user-status text-muted">@if (Auth::guard('web')->user()->designation)
                                            {{ Auth::guard('web')->user()->designation->title }}
                                        @endif</span>
                                </div>
                                <span>
                                    <img class="round"
                                        src="@if(Auth::guard('web')->user()->image)
                                        {{ asset('images/profile_image').'/'.Auth::guard('web')->user()->image }}
                                        @else
                                        {{ asset('admin_template/app-assets/images/portrait/small/avatar-s-11.jpg') }}
                                        @endif"
                                        alt="avatar" height="40" width="40">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0">
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item"
                                    href="{{ route('admin.logout') }}"><i class="bx bx-power-off mr-50"></i>
                                    Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                        <div class="brand-logo"><img class="logo"
                                src="{{asset('images/company/'.$company->logo)}}" /></div>
                        {{--  <h2 class="brand-text mb-0">WAAW Banglades</h2>  --}}
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
                data-icon-style="">

                {{-- @if (Auth::guard('web')->user()->can(''))

                @endif --}}
                <li class=" navigation-header"><span><a href="{{ route('client.home') }}" target="_new">Website</a></span>
                </li>
                {{-- @canany(['brand.index', 'catalogue.index', 'category.index', 'product.index']) --}}
                    <li class=" navigation-header"><span>Product Section</span>
                    </li>
                {{-- @endcanany --}}

                @can('brand.index')
                    <li class=" nav-item"><a href="{{ route('brand.index') }}"><i class="bx bxl-slack"></i><span class="menu-title">Brand</span></a>
                    </li>
                @endcan
                {{-- @can('catalogue.index') --}}
                    <li class=" nav-item"><a href="{{ route('catalogue.index') }}"><i class="bx bx-building"></i><span class="menu-title">Catalogue</span></a>
                    </li>
                {{-- @endcan --}}
                {{-- @can('category.index') --}}
                    <li class=" nav-item"><a href="{{ route('category.index') }}"><i class="bx bxs-categories"></i><span class="menu-title">Categories</span></a>
                    </li>
                {{-- @endcan --}}
                {{-- @can('product.index') --}}
                    <li class=" nav-item"><a href="{{ route('product.index') }}"><i class="bx bx-package"></i><span class="menu-title">Product</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('product-variation.create') }}"><i class="bx bx-package"></i><span class="menu-title">Product Variation</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('view-section.index') }}"><i class="bx bx-package"></i><span class="menu-title">Product View Section</span></a>
                    </li>
                {{-- @endcan --}}


                {{-- @can('stock.index') --}}
                    <li class=" nav-item"><a href="{{ route('stock.index') }}"><i class="bx bx-store-alt">
                        </i><span class="menu-title">Stock</span></a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('stock.index') --}}
                    <li class=" nav-item"><a href="{{ route('customer.index') }}"><i class="bx bx-store-alt">
                        </i><span class="menu-title">Customer</span></a>
                    </li>
                <li class=" nav-item"><a href="#"><i class="bx bx-store-alt">
                        </i><span class="menu-title">Order</span></a>
                    <ul class='menu-content'>
                        <li><a href="{{ route('order.index') }}"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">All Order</span></a>
                        </li>
                        <li><a href="{{ route('order.index','ordered') }}"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">New Order</span></a>
                        </li>
                        <li><a href="{{ route('order.index','confirm') }}"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="LivIcons">Confirm Order</span></a>
                        </li>
                        <li><a href="{{ route('order.index','shipping') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="LivIcons">Shipping Order</span></a>
                        </li>
                        <li><a href="{{ route('order.index','delivered') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="LivIcons">Delivered Order</span></a>
                        </li>
                        <li><a href="{{ route('order.index','canceled') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="LivIcons">Cancel Order</span></a>
                        </li>
                    </ul>
                </li>
                {{-- @endcan --}}

                <li class=" navigation-header"><span>Banner Section</span>
                </li>
                <li class=" nav-item"><a href="{{ route('banner.index') }}"><i class="bx bxl-slack"></i><span class="menu-title">Slider</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('ad.index') }}"><i class="bx bxl-slack"></i><span class="menu-title">AD Zone</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('product-type.index') }}"><i class="bx bxl-slack"></i><span class="menu-title">Product Type</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('company-details.index') }}"><i class="bx bx-store-alt">
                        </i><span class="menu-title">Company Details</span></a>
                </li>


                @canany(['designation.index', 'benefit.index', 'user.index', 'user_role.index'])
                    <li class=" navigation-header"><span>Role Management</span>
                    </li>

                    @can('user.index')
                        <li class=" nav-item"><a href="{{ route('user.index') }}"><i class="bx bx-user-circle"></i><span class="menu-title" data-i18n="Colors">Employee</span></a>
                        </li>
                    @endcan
                    @can('user_role.index')
                        <li class=" nav-item"><a href="{{ route('role.index') }}"><i class="bx bx-user-circle"></i><span class="menu-title" data-i18n="Colors">User Role</span></a>
                        </li>
                    @endcan
                @endcanany

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
