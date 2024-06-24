@extends('client.layouts.main')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('client.home') }}">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

        <div class="shop_area shop_reverse" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    {{-- <aside class="sidebar_widget">
                        <div class="widget_list widget_categories">
                            <h3>Product categories</h3>
                            <div id="menu" class="text-start ">
                                <ul class="offcanvas_main_menu">
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
                                                                        <li><a href="{{ url('shop/category/'.$subcategory->id) }}">{{ $subcategory->name }}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside> --}}
                    <aside class="sidebar_widget">
                        <div class="widget_list widget_filter">
                            <form action="{{ route('filter') }}" method="get" >
                                <h3>Product categories</h3>
                                <div id="menu" class="text-start ">
                                    <ul class="offcanvas_main_menu">
                                        @foreach (App\Models\Category::orderBy('name','ASC')->get() as $category)
                                            <li class="menu-item-has-children" style="font-size: 14px">
                                                <input type="checkbox" class="checkbox" name="category[]" value="{{ $category->id }}" @if (in_array($category->id, $categories))
                                                    checked
                                                       @endif onclick=this.form.submit()> {{ $category->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <h3>Filter by price</h3>

                                <div id="slider-range"></div>
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />
                                <input type="hidden" name="start" @if ($start)
                                    value="{{ $start }}"
                                       @endif id="start" />
                                <input type="hidden" name="end" @if ($end)
                                    value="{{ $end }}"
                                       @endif id="end" />
                            </form>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
               <div class="col-lg-9 col-md-12">

                    <!--shop toolbar start-->
                   @if (count($products) > 0)
                        <div class="shop_toolbar_wrapper">
                            <div class="shop_toolbar_btn">
                                <button data-role="grid_4" type="button" class=" active btn-grid-4" data-toggle="tooltip" title="4"></button>
                                <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"></button>
                            </div>
    {{--                        <div class="niceselect_option">--}}
    {{--                            <form class="select_option" action="#">--}}
    {{--                                <select name="orderby" id="short">--}}
    {{--                                    <option selected value="1">Sort by average rating</option>--}}
    {{--                                    <option value="2">Sort by popularity</option>--}}
    {{--                                    <option value="3">Sort by newness</option>--}}
    {{--                                    <option value="4">Sort by price: low to high</option>--}}
    {{--                                    <option value="5">Sort by price: high to low</option>--}}
    {{--                                    <!-- <option value="6">Product Name: Z</option> -->--}}
    {{--                                </select>--}}
    {{--                            </form>--}}
    {{--                        </div>--}}
                            <!-- <div class="page_amount">
                                <p>Showing 1–9 of 21 results</p>
                            </div> -->
                        </div>
                   @endif
                    <!--shop toolbar end-->

                    <!--shop wrapper start-->
                    <div class="row no-gutters shop_wrapper">
                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <div class="col-lg-3 col-md-4 col-6 ">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('client.product_details',$product->id) }}"><img src="{{asset('images/product_image/'.$product->image)}}" alt=""></a>
                                                {{--  <a class="secondary_img" href="product-details.html"><img src="{{asset('client')}}/img/product/product6.jpg" alt=""></a>  --}}
                                                <div class="label_product">
                                                    <span class="label_wishlist"><a class="btn-wishlist"
                                                                                    href="javascript:void(0)"
                                                                                    data-tippy-placement="top"
                                                                                    data-tippy-arrow="true" data-tippy-inertia="true"

                                                                                    cus-product-id="{{ $product->id }}"
                                                                                    cus-product-name="{{ ucwords($product->title) }}"
                                                                                    cus-product-slug="{{ route('client.product_details',$product->id) }}"
                                                                                    cus-price="{{ $product->mrp }}"
                                                                                    cus-photo="{{ asset('images/product_image/'.$product->image)}}"
                                                                                    cus-stock="{{ $product->has_stock }}"
                                                                                    cus-date="{{ date('d M Y') }}"
                                                                                    cus-time="{{ date('h:i a') }}"
                                                        >
                                                        <i class="ion-android-favorite-outline"></i></a></span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
{{--                                                        <li class="wishlist"><a href="{{ route('client.product_details',$product->id) }}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>--}}
                                                        <li class="compare"><a href="{{ route('client.product_details',$product->id) }}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="fa fa-shopping-cart"
                                                                aria-hidden="true"></i></a></li>
                                                        <li class="quick_button">
                                                            <a class="quickViewDetailsByPId" href="javascript:void(0)" data-tippy-placement="top"
                                                               data-tippy-arrow="true"
                                                               data-tippy-inertia="true"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#modal_box"
                                                               data-tippy="Quick View"
                                                               quick-product="{{ $product->id }}"
                                                               quick-url="{{ route('quickViewDetails') }}"
                                                               product-url="{{ route('client.product_details',$product->id) }}"
                                                               quick-asset="{{ asset('') }}"
                                                            > <i class="ion-ios-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="product_content grid_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="{{ route('client.product_details',$product->id) }}">{{ $product->title }}</a></h4>

                                                    <div class="price_box">
                                                        @if($product->discount_amount > 0)
                                                    <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                                                    <span class="current_price">Tk {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                                                    @else
                                                    <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                                                    @endif
                                                    </div>
                                                </div>
{{--                                                <div class="add_to_cart">--}}
{{--                                                    <a href="{{ route('client.product_details',$product->id) }}" title="Add to cart">Add to cart</a>--}}
{{--                                                </div>--}}
                                            </div>
                                            <div class="product_content list_content">
                                                <h4 class="product_name"><a href="{{ route('client.product_details',$product->id) }}">{{ $product->title }}</a></h4>

                                                <div class="price_box">
                                                     @if($product->discount_amount > 0)
                                                    <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                                                    <span class="current_price">Tk {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                                                    @else
                                                    <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                                                    @endif
                                                </div>
                                                <div class="product_desc">
                                                    {!! $product->details_description !!}
                                                </div>
{{--                                                <div class="add_to_cart">--}}
{{--                                                    <a href="{{ route('client.product_details',$product->id) }}" title="Add to cart">Add to cart</a>--}}
{{--                                                </div>--}}
                                                <div class="action_links">
                                                    <ul>
{{--                                                        <li class="wishlist"><a href="{{ route('client.product_details',$product->id) }}" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>--}}
                                                        <li class="compare"><a href="{{ route('client.product_details',$product->id) }}" title="Add to Compare"><i class="fa fa-shopping-cart" aria-hidden="true"></i> cart</a></li>
                                                        <li class="quick_button">
                                                            <a class="quickViewDetailsByPId" href="javascript:void(0)" data-tippy-placement="top"
                                                               data-tippy-arrow="true"
                                                               data-tippy-inertia="true"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#modal_box"
                                                               data-tippy="Quick View"
                                                               quick-product="{{ $product->id }}"
                                                               quick-url="{{ route('quickViewDetails') }}"
                                                               product-url="{{ route('client.product_details',$product->id) }}"
                                                               quick-asset="{{ asset('') }}"
                                                            > <i class="ion-ios-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                            @endforeach
                        @else
                            <h3 style="padding-top: 15px;">No Product Found</h3>
                        @endif

                    </div>
                   @if (count($products) > 0)
                        <div class="shop_toolbar t_bottom">
                            <div class="pagination">
                                {{ $products->links() }}
                            </div>
                        </div>
                   @endif
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
{{-- <form id="frmFilter" action="{{ route('client.shop') }}" method="get">
    <input type="hidden" name="product[]" value="{{ $products }}">
</form> --}}
@endsection
{{-- @push("scripts")
    <script>
         $(document).ready(function() {
            $("#short").change(function(){
                $(".orderby").val($("#short option:selected").val());
                $("#frmFilter").submit();
            })
        })
    </script>
@endpush --}}


