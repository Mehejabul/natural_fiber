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
                            <li>{{ $product->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
      <!-- product details page start -->
    <div class="product_page_bg productDetailsPage">
        <div class="container">
            <div class="product_details_wrapper mb-55">
                <!--product details start-->
                <div class="product_details">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="product-details-tab">
                                <div id="img-1" class="zoomWrapper single-zoom">
                                    <a href="javascript:void(0)">
                                        <img id="zoom1" src="{{asset('images/product_image/'.$product->image)}}"
                                            data-zoom-image="{{asset('images/product_image/'.$product->image)}}" alt="big-1">
                                    </a>
                                </div>
                                @if ($product->images)
                                    <div class="single-zoom-thumb">
                                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01" style="padding-left: 0px !important;">
                                            @foreach ($product->images as $image)
                                                <li>
                                                    <a href="javascript:void(0)" class="elevatezoom-gallery active" data-update=""
                                                       data-image="{{asset('images/multiImage/'.$image->image)}}"
                                                       data-zoom-image="{{asset('images/multiImage/'.$image->image)}}">
                                                        <img src="{{asset('images/multiImage/'.$image->image)}}" alt="zo-th-1" />
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="product_d_right">
{{--                                <form action="{{ route('cart.store') }}" id="addtocart" method="post">--}}
{{--                                    @csrf--}}
                                    <h3><a href="{{ route('client.product_details',$product->id) }}">{{ $product->title }}</a></h3>
                                    <div class="price_box">
                                         @if($product->discount_amount > 0)
                                                    <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                                                    <span class="current_price">Tk {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                                                    @else
                                                    <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                                                    @endif
                                    </div>
                                    <div class="product_variant size">
{{--                                        <h3>Available Options</h3>--}}
                                        <div class="slect_color">
                                            <span>Color :</span>
                                            <span class="color">{{ $product->color }}</span>
                                        </div>
                                    </div>
                                   @if(count($product->productvariation) > 0)
                                    {{-- @dd($product->productvariation) --}}
                                    <div class="product_variant size">
                                        <label>sizes</label>
                                        <ul class="product_details_nav">
                                            @foreach ($product->productvariation as $size)
                                            <input type="hidden" id="sizeId" value='{{ $size->id }}'>
                                                <li class="product_details_nav_item @if($size->quantity == 0) no-stock  @endif">
                                                    <a href="javascript:void(0)" data-stock="{{ $size->quantity }}"
                                                       data-size="{{ $size->productvariation->size }}"
                                                       variationID="{{ $size->productvariation->id }}"
                                                       class="product_details_nav_link sizeClick">{{ $size->productvariation->size }}</a>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <p id="sizeColorSelectError"
                                           style="padding-top: 10px; font-size: 12px !important; color: red;">
                                            <span></span></p>
                                    </div>

                                @endif
{{--                                   <div class="product_variant quantity">--}}
{{--                                        <label>quantity:</label>--}}
{{--                                       <div class="decrement button" onclick="decreaseValue()">-</div>--}}
{{--                                       <input type="text" id="quantity" name="quantity" min="1" max="" value="1">--}}
{{--                                       <div class="increment button" onclick="increaseValue()">+</div>--}}
{{--                                       <input type="hidden" name="id" value="{{ $product->id }}">--}}

{{--                                    </div>--}}
                                    <div class="product_arrow d-flex mt-4">
                                        <button id="btn-cart" class="button btn-cart"
                                                cus-product-id="{{ $product->id }}"
                                                cus-product-name="{{ ucwords($product->title) }}"
                                                cus-product-slug="{{ route('client.product_details',$product->id) }}"
                                                cus-price="@if($product->discount_amount > 0) {{ $product->mrp-$product->discount_amount }} @else {{ $product->mrp }} @endif"
                                                cus-photo="{{ asset('images/product_image/'.$product->image)}}" >
                                           add to cart</button>
                                        <span class="wishlist">
                                            <a class="btn-wishlist"
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
                                                        <i class="ion-android-favorite-outline"></i></a>
                                        </span>
                                    </div>
{{--                                </form>--}}
                                  <div class="tab_section py-3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="accordionExample" class="card__accordion accordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="details">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Details
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="details" data-bs-parent="#accordionExample">
                                                    <div class="product_d_table py-2">
                                                        {!! $product->details_description !!}
                                                    </div>
                                                </div>
                                            </div>

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="#">
                                                        <button class="accordion-button sizeGuidePhoto" type="button"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                                size-product-photo = "{{ $product->size_guide ? asset('images/product_sizeguide/'.$product->size_guide) : asset('images/company/'.$company->size_guide) }}"
                                                                data-bs-target="#modal_size">
                                                            Size Guide
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                         aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!--product details end-->
            </div>

            <!--product area start-->
            <section class="product_area related_products">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Related Products </h2>
                        </div>
                    </div>
                </div>
                <div class="product_carousel product_style product_column5 owl-carousel">
                    @if (App\Models\product::where('category_id',$product->category_id)->get())
                        @foreach (App\Models\product::where('category_id',$product->category_id)->get()->all() as $product)
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details',$product->id)}}"><img
                                                src="{{asset('images/product_image/' .$product->image)}}" alt=""></a>
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
{{--                                                <li class="wishlist"><a href="javascript:void(0)" data-tippy-placement="top"--}}
{{--                                                        data-tippy-arrow="true" data-tippy-inertia="true"--}}
{{--                                                        data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"--}}
{{--                                                            onclick="addProductToWishlist({{ $product->id}},'{{ $product->title}}',1,{{ $product->mrp }})"></i></a>--}}
{{--                                                </li>--}}
                                                <li class="compare"><a href="javascript:void(0)" data-tippy-placement="top"
                                                        data-tippy-arrow="true" data-tippy-inertia="true"
                                                        onclick="addToCart({{ $product->id }},1)"
                                                        data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button">
                                                    <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                                       data-tippy-placement="top"
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
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a
                                                    href="{{route('client.product_details',$product->id)}}">{{ $product->title }}</a>
                                            </h4>
                                            <div class="price_box">
                                                 @if($product->discount_amount > 0)
                                                    <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                                                    <span class="current_price">Tk {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                                                    @else
                                                    <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                                                    @endif
                                        </div>
{{--                                        <div class="add_to_cart">--}}
{{--                                            <a href="javascript:void(0)" title="Add to cart"--}}
{{--                                                onclick="addToCart({{ $product->id }},1)">Add to cart</a>--}}
{{--                                        </div>--}}
                                    </div>
                                </figure>
                            </article>
                        @endforeach
                    @endif
                </div>
            </section>
            <!--product area end-->
        </div>
    </div>
    <!-- product details end -->

@endsection

@push('scripts')
<Script>
    function increaseValue() {
        var value = parseInt(document.getElementById('quantity').value, 10);
        value = isNaN(value) ? 1 : value;
        value++;
        document.getElementById('quantity').value = value;
    }

    function decreaseValue() {
    var value = parseInt(document.getElementById('quantity').value, 10);
    value = isNaN(value) ? 1 : value;
    value < 1 ? value = 1 : '';
    value--;
    value == 0 ? value = 1 : 1
    document.getElementById('quantity').value = value;
    }

    function addProductToWishlist(id, name, quantity, price) {
        $.ajax({
            type: 'POST',
            url: "{{ route('wishlist.store') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                name: name,
                quantity: quantity,
                price: price
            },
            success: function (data) {
                if (data.status == 200) {
                    getCartWishlistCount();
                    // $.notify({
                    //     icon:"fa fa-check",
                    //     title:"Success!",
                    //     message:"Item successfully addes to your wishlist!"
                    // })
                }
            }
        })
    }

    function addToCart(id, quantity) {
        $.ajax({
            type: 'POST',
            url: "{{ route('cart.store') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                quantity: quantity,
            },
            success: function (data) {
                if (data.status == 200) {
                    getCartWishlistCount();
                    // $.notify({
                    //     icon:"fa fa-check",
                    //     title:"Success!",
                    //     message:"Item successfully addes to your wishlist!"
                    // })
                }
            }
        })
    }


    function getCartWishlistCount() {
        $.ajax({
            type: "GET",
            url: "{{ route('cart.wishlist.count') }}",
            success: function (data) {
                if (data.status == 200) {
                    $("#cart_count").html(data.cartCount);
                    $("#wishlist_count").html(data.wishlistCount);
                }
            }
        })
    }

</Script>

@endpush
