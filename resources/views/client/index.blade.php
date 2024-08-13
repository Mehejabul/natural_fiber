@extends('client.layouts.main')
@section('homepage','categories_seven')
@section('content')
<!--slider area start-->
{{-- @if ($sliders)
        <section class="slider_section slider_s_three">
            <div class="slider_area slider3_carousel owl-carousel">
                @foreach ($sliders as $slider)
                    <div class="single_slider d-flex align-items-center"
                         data-bgimg="{{asset('images/banner/'.$slider->image)}}">
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
        </div>
    </div>
</div>

</div>
@endforeach
</div>
</section>
@endif --}}
@if ($sliders)
<section class="slider_section slider_s_seven mb-60 mt-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-2">
                <div class="slider_area slider3_carousel owl-carousel">
                    <!-- @foreach ($sliders as $slider)
                        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('images/banner/'.$slider->image)}}">
                            <div class="slider_content slider_c_seven">
                                <h3>new collection</h3>
                                <h1>new Arrivals <br> cellphone new model 2022</h1>
                                <p>discount <span> -30% off</span> this week</p>
                                <a class="button" href="shop.html">DISCOVER NOW</a>
                            </div> 
                        </div>
                        @endforeach -->
                    <div class="single_slider d-flex align-items-center"
                        data-bgimg="{{asset('images/golden-jute/slider/slider1.jpg')}}">
                    </div>
                    <div class="single_slider d-flex align-items-center"
                        data-bgimg="{{asset('images/golden-jute/slider/slider2.png')}}">
                    </div>
                </div>
            </div>
        </div>
</section>
@endif

<!--slider area end-->

<!-- sister consern start -->
{{-- <section class="sister_concern">
    <div class="container">
        <div class="sister_concern_title">
            <h2>Sister Concern</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="sister_concern_image">
                    <img src="{{asset('images/golden-jute/sister_concern/Golden Beverage.jpg')}}">
                    <a href="#"><p>GOLDEN BEVERAGE</p></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sister_concern_image">
                    <img src="{{asset('images/golden-jute/sister_concern/golden_jute_product.jpg')}}">
                    <a href="#"><p>GOLDEN JUTE Poduct</p></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sister_concern_image">
                    <img src="{{asset('images/golden-jute/sister_concern/global_golden_craft.jpg')}}">
                    <a href="#"><p>GLOBAL GOLDEN JUTE & CRAFTS LTD.</p></a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- sister consern end -->

<!-- about_section start -->
 <section class="about_us_section">
    <div class="container">
        <div class="about_part">
            <div class="row">
                @foreach ($abouts as $about)
                <div class="col-lg-5">
                    <div class="about_left">
                        <div class="about_left_img">
                            <img src="{{asset('images/about/' . $about -> image)}}" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about_right">
                        <div class="about_us_title">
                            <h2>About Us</h2>
                        </div>
                        
                        <div class="about_pera">
                            <p>{!!$about -> short_description!!}</p>
                            
                        </div>
                      
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
 </section>

<!-- about section end -->

<!-- bkash api ads section -->

@if($ads)
@foreach ($ads as $ad)
@if ($ad->view_section == 'bellow_slider')
@if ($ad->type == 'short')
<section class="shipping_area mb-0">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-md-12 col-12"><a href="#"><img src="{{asset('images/ad/'.$ad->image)}}" alt=""
                        class="img-fluid"></a></div>
            {{-- <div class="col-md-6 col-12"><a href="#"><img src="{{asset('client/assets')}}/img/api-image/bkashapi2.jpg"
            alt=""
            class="img-fluid"></a>
        </div> --}}
    </div>
    </div>
</section>
@else
<section class="ad-banner mt-35 mb-35">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-12">
                <a href="javascript:void(0)" class="next-link-a">
                    <img src="{{asset('images/ad/'.$ad->image)}}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>
@endif
@endif
@endforeach
@endif

<!-- bkash api ads section -->

<!--home section bg area start-->
<div class="home_section_bg" style="padding: 60px 0 10px !important;">
    <!--Categories product area start-->

    <!--Categories product area end-->
    <!--product area start-->
    <div class="product_area deals_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title s_title_style3">
                            <h2 class="text-uppercase">Trending Categories</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Fashion" role="tabpanel">
                    <div class="product_carousel product_style product_column4 owl-carousel">

                        @if ($categories)
                        @foreach ($categories as $category)
                        <article class="trending_product px-2">
                            <figure>
                                <div class="trending_thumb">
                                    <a class="primary_img" href="{{ url('shop/category/'.$category->id) }}"><img
                                            src="{{asset('images/category/'.$category->image)}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="category-description text-uppercase">
                                        <a class=""
                                            href="{{ url('shop/category/'.$category->id) }}">{{ $category->name }}</a>
                                    </div>
                            </figure>
                        </article>
                        @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- product_describe_area_start -->
     <section class="product_describe_area_start">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_describe_pera">
                        <p>Jute yarn is spun and prepared for use in weaving, knitting, manufacturing sewing thread, jute yarns have single or multiple ply. It is usually bleached, dyed, processed to serve various purposes. Various dimensions of Jute fibre plied together to make jute yarn or jute twines / jute string or jute thread, ropes etc as per requirement and use. These are use for the purpose of tying, knotting, binding, etc particularly for agricultural commodities.</p>
                    </div>

                    <div class="product_describe_pera">
                        <p>The types of jute yarn / twine manufactured can be classified according to the application or use to which they are put ie, fine yarns, hessian yarns, carpet, sacking yarns, etc. These yarns can be further classified into warp and weft yarns, the warp yarns normally being superior to the weft yarns as they have to withstand the cycles of stress during weaving while the weft yarns act more as filler and undergo less strain during weaving process.</p>
                    </div>
                </div>
            </div>

        </div>
     </section>
    <!-- porduct_describe_area_end -->

    <!-- Documentary start -->
     <section class="documentay">
        <div class="container">
            <div class="documentarty_title">
                <h3>Company Documentary</h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{-- @dd($documentory); --}}
                    @if (!empty($documentory))
                       <div class="tvWrap">
                            <div class="tv_shape">
                                <div class="youtube_video">
                                <iframe width="560" height="315" src="{{$documentory->company_documentory}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        {{-- https://www.youtube.com/embed/PIfai6VYcJI?si=ERxsq7NDssTHWxcS --}}
                    </div> 
                    @endif
                </div>
            </div>
        </div>
     </section>
    <!-- Documentary end -->

    <!-- jute Rope descriptions start -->
     {{-- <section class="jute_rope_descriptions">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jute_rope_specification">
                        <p>3 Standard jute rope</p>
                        <ul>
                            <li><p><strong>Qulity:</strong>Sacking,Hessain, and CB</p></li>
                            <li><p><strong>Diameter:</strong>3mm to 5mm</p></li>
                            <li><p><strong>Length:</strong>30m, 50m, 100m, 200m as per buyer demand</p></li>
                            <li><p><strong>Weight:</strong>2.00kg coil/spool, 3 kg coil/spool, 10kg coil, 25kg coil or above.</p></li>
                            <li><p><strong>Packing: </strong>Poly Shrink film and truss or as per buyer demand</p></li>
                        </ul>
                    </div>
                    <div class="jute_rope_pera">
                        <p>Jute rope is an organic fibre known for its strength and resilience. The fibres of the plant extend into thick threads, which can be purchased or created on spindles. It's very thin, so for long journeys, it's excellent. The rope Jute is also heat resistant and the impact of sunlight.</p>
                    </div>
                    <div class="jute_rope_pera">
                        <p>Golden Jute Products Corporation has progressed in marketing goods made of jute and supply the best jute items in your budget. Through innovation and creativity, we have also provided contemporary consumers with innovative products.</p>
                    </div>
                    <div class="jute_rope_pera">
                        <p>Jute grows during the ranges of Bangladesh. Jute is a broad, shining plant fibre, which may also be challenging and robust filets. As long as the plant can, the fibres are between 3 and 13 feet long.</p>
                    </div>
                    <div class="jute_rope_pera">
                        <p>Jute ropes are white to light brown. The natural jute rope has replaced synthetic material in many of these applications; some services have the environmentally friendly jute style that would not be appropriate to use synthetics. We choose jute rope for specific applications, such as for home decorating, artisan products, etc. The following are the applications of jute ropes</p>
                    </div>
                    <div class="jute_rope_pera">
                        <p>Jute is durable and elegant. Therefore, it cannot be surprising that any of these materials, from lampshades to elegant vases, are used for weaving. Since they are widespread, coloured jute rope has an incredibly dense and delicate contact. They can withstand heavy traffic and are appropriate for families with children and puppies who are substantial.</p>
                    </div>
                </div>
            </div>
        </div>
     </section> --}}

     <!-- jute Rope descriptions end -->

    @if($ads)
    @foreach ($ads as $ad)
    @if ($ad->view_section == 'bellow_trending_categories')
    @if ($ad->type == 'short')
    <section class="shipping_area mb-0">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-md-12 col-12"><a href="#"><img src="{{asset('images/ad/'.$ad->image)}}" alt=""
                            class="img-fluid"></a></div>
                {{-- <div class="col-md-6 col-12"><a href="#"><img src="{{asset('client/assets')}}/img/api-image/bkashapi2.jpg"
                alt=""
                class="img-fluid"></a>
            </div> --}}
        </div>
</div>
</section>
@else
<section class="ad-banner mt-35 mb-35">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-12">
                <a href="javascript:void(0)" class="next-link-a">
                    <img src="{{asset('images/ad/'.$ad->image)}}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>
@endif
@endif
@endforeach
@endif

</div>

<!--blog area start-->
       <div class="our_partners">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="our_partners_Title">
                            <h2>Our Partners</h2>
                        </div>
                        <div class="blog_container blog_column4 owl-carousel">
                        <article class="single_blog">
                                <figure>
                                    <div class="client_image">
                                        <a href="#">
                                            <img src="{{asset('images/golden-jute/client/client_one.png')}}" alt="client_one.png">
                                        </a>
                                    </div>
                                </figure>
                            </article> 
                            <article class="single_blog">
                                <figure>
                                    <div class="client_image">
                                        <a href="#">
                                            <img src="{{asset('images/golden-jute/client/clients_two.png')}}" alt="clients_two.png">
                                        </a>
                                    </div>
                                </figure>
                            </article> 
                            <article class="single_blog">
                                <figure>
                                    <div class="client_image">
                                        <a href="#">
                                            <img src="{{asset('images/golden-jute/client/client_three.png')}}" alt="client_three.png">
                                        </a>
                                    </div>
                                </figure>
                            </article>
                            <article class="single_blog">
                                <figure>
                                    <div class="client_image">
                                        <a href="#">
                                            <img src="{{asset('images/golden-jute/client/client_one.png')}}" alt="client_one.png">
                                        </a>
                                    </div>
                                </figure>
                            </article> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--blog area end-->

<!--our certificate  area start-->
<div class="our_certificate">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="our_partners_Title">
                            <h2>Our Crtification</h2>
                        </div>
                        <div class="blog_container blog_column4 owl-carousel">
                        <article class="single_blog">
                                <figure>
                                    <div class="client_image">
                                        <a href="#">
                                            <img src="{{asset('images/golden-jute/certificate/certificate1.jpg')}}" alt="client_one.png">
                                        </a>
                                    </div>
                                </figure>
                            </article> 
                            <article class="single_blog">
                                <figure>
                                    <div class="client_image">
                                        <a href="#">
                                            <img src="{{asset('images/golden-jute/certificate/certificate 2.jpg')}}" alt="clients_two.png">
                                        </a>
                                    </div>
                                </figure>
                            </article> 
                            <article class="single_blog">
                                <figure>
                                    <div class="client_image">
                                        <a href="#">
                                            <img src="{{asset('images/golden-jute/certificate/certificate3.jpg')}}" alt="client_three.png">
                                        </a>
                                    </div>
                                </figure>
                            </article>
                            <article class="single_blog">
                                <figure>
                                    <div class="client_image">
                                        <a href="#">
                                            <img src="{{asset('images/golden-jute/certificate/certificate4.jpg')}}" alt="client_one.png">
                                        </a>
                                    </div>
                                </figure>
                            </article> 
                        </div>
                    </div>
                </div>
            </div>
</div>
<!--our certificate area end-->




<!--product area end-->


<!--product area start-->
{{-- <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title s_title_style3">
                            <h2 class="text-uppercase">New Arrivals</h2>
                        </div>
                        <div class="product_tab_btn d-flex">
                            <ul class="nav mx-3" role="tablist" id="nav-tab3">
                                <li>
                                    <a class="active text-uppercase" data-toggle="tab" href="#men" role="tab"
                                       aria-controls="Men"
                                       aria-selected="true">
                                        Men
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#women" role="tab" aria-controls="Women"
                                       class="text-uppercase"
                                       aria-selected="false">
                                        women
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#kids" role="tab" aria-controls="Kids"
                                       class="text-uppercase"
                                       aria-selected="false">
                                        kids
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#electronics" role="tab" aria-controls="electronics"
                                       class="text-uppercase"
                                       aria-selected="false">
                                        electronics
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#gift" role="tab" aria-controls="gift"
                                       class="text-uppercase"
                                       aria-selected="false">
                                        gift
                                    </a>
                                </li>

                            </ul>
                            <ul style="padding-left: 0px !important; margin-bottom: 0px !important;"><li><a href="{{ url('shop/new_arrival/new_arrival') }}"
class="text-uppercase">
See More
</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="tab-content">
    <div class="tab-pane fade show active" id="men" role="tabpanel">
        <div class="product_carousel product_style product_column4 owl-carousel">
            @if ($new_arrivals_men)
            @foreach ($new_arrivals_men as $product)
            <article class="single_product">
                <figure>
                    <div class="product_thumb">
                        <a class="primary_img" href="{{ route('client.product_details',$product->id) }}"><img
                                src="{{asset('images/product_image/'.$product->image)}}" alt=""></a>
                        <div class="label_product">
                            <span class="label_wishlist"><a class="btn-wishlist" href="javascript:void(0)"
                                    data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                    cus-product-id="{{ $product->id }}"
                                    cus-product-name="{{ ucwords($product->title) }}"
                                    cus-product-slug="{{ route('client.product_details',$product->id) }}"
                                    cus-price="{{ $product->mrp }}"
                                    cus-photo="{{ asset('images/product_image/'.$product->image)}}"
                                    cus-stock="{{ $product->has_stock }}" cus-date="{{ date('d M Y') }}"
                                    cus-time="{{ date('h:i a') }}">
                                    <i class="ion-android-favorite-outline"></i></a></span>
                        </div>
                        <div class="action_links">
                            <ul>
                                <li class="compare"><a href="{{ route('client.product_details',$product->id) }}"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        data-tippy="Add to cart"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i></a></li>
                                <li class="quick_button">
                                    <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="Quick View"
                                        quick-product="{{ $product->id }}" quick-url="{{ route('quickViewDetails') }}"
                                        product-url="{{ route('client.product_details',$product->id) }}"
                                        quick-asset="{{ asset('') }}"> <i class="ion-ios-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_content">
                        <div class="product_content_inner">
                            <h4 class="product_name"><a
                                    href="{{ route('client.product_details',$product->id) }}">{{ ucwords($product->title) }}</a>
                            </h4>
                            <div class="price_box">
                                @if($product->discount_amount > 0)
                                <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                                <span class="current_price">Tk
                                    {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                                @else
                                <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </figure>
            </article>
            @endforeach
            @endif
        </div>
    </div>
    <div class="tab-pane fade" id="women" role="tabpanel">
        <div class="product_carousel product_style product_column4 owl-carousel">
            @if ($new_arrivals_women)
            @foreach ($new_arrivals_women as $product)
            <article class="single_product">
                <figure>
                    <div class="product_thumb">
                        <a class="primary_img" href="{{ route('client.product_details',$product->id) }}"><img
                                src="{{asset('images/product_image/'.$product->image)}}" alt=""></a>
                        <div class="label_product">
                            <span class="label_wishlist"><a class="btn-wishlist" href="javascript:void(0)"
                                    data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                    cus-product-id="{{ $product->id }}"
                                    cus-product-name="{{ ucwords($product->title) }}"
                                    cus-product-slug="{{ route('client.product_details',$product->id) }}"
                                    cus-price="{{ $product->mrp }}"
                                    cus-photo="{{ asset('images/product_image/'.$product->image)}}"
                                    cus-stock="{{ $product->has_stock }}" cus-date="{{ date('d M Y') }}"
                                    cus-time="{{ date('h:i a') }}">
                                    <i class="ion-android-favorite-outline"></i></a></span>
                        </div>
                        <div class="action_links">
                            <ul>

                                <li class="compare"><a href="{{ route('client.product_details',$product->id) }}"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        data-tippy="Add to cart"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i></a></li>
                                <li class="quick_button">
                                    <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="Quick View"
                                        quick-product="{{ $product->id }}" quick-url="{{ route('quickViewDetails') }}"
                                        product-url="{{ route('client.product_details',$product->id) }}"
                                        quick-asset="{{ asset('') }}"> <i class="ion-ios-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_content">
                        <div class="product_content_inner">
                            <h4 class="product_name"><a
                                    href="{{ route('client.product_details',$product->id) }}">{{ ucwords($product->title) }}</a>
                            </h4>
                            <div class="price_box">

                                @if($product->discount_amount > 0)
                                <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                                <span class="current_price">Tk
                                    {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                                @else
                                <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </figure>
            </article>
            @endforeach
            @endif

        </div>
    </div>
    <div class="tab-pane fade" id="kids" role="tabpanel">
        <div class="product_carousel product_style product_column4 owl-carousel">
            @if ($new_arrivals_kids)
            @foreach ($new_arrivals_kids as $product)
            <article class="single_product">
                <figure>
                    <div class="product_thumb">
                        <a class="primary_img" href="{{ route('client.product_details',$product->id) }}"><img
                                src="{{asset('images/product_image/'.$product->image)}}" alt=""></a>
                        <div class="label_product">
                            <span class="label_wishlist"><a class="btn-wishlist" href="javascript:void(0)"
                                    data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                    cus-product-id="{{ $product->id }}"
                                    cus-product-name="{{ ucwords($product->title) }}"
                                    cus-product-slug="{{ route('client.product_details',$product->id) }}"
                                    cus-price="{{ $product->mrp }}"
                                    cus-photo="{{ asset('images/product_image/'.$product->image)}}"
                                    cus-stock="{{ $product->has_stock }}" cus-date="{{ date('d M Y') }}"
                                    cus-time="{{ date('h:i a') }}">
                                    <i class="ion-android-favorite-outline"></i></a></span>
                        </div>
                        <div class="action_links">
                            <ul>

                                <li class="compare"><a href="{{ route('client.product_details',$product->id) }}"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        data-tippy="Add to cart"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i></a></li>
                                <li class="quick_button">
                                    <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="Quick View"
                                        quick-product="{{ $product->id }}" quick-url="{{ route('quickViewDetails') }}"
                                        product-url="{{ route('client.product_details',$product->id) }}"
                                        quick-asset="{{ asset('') }}"> <i class="ion-ios-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_content">
                        <div class="product_content_inner">
                            <h4 class="product_name"><a
                                    href="{{ route('client.product_details',$product->id) }}">{{ ucwords($product->title) }}</a>
                            </h4>
                            <div class="price_box">

                                @if($product->discount_amount > 0)
                                <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                                <span class="current_price">Tk
                                    {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                                @else
                                <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </figure>
            </article>
            @endforeach
            @endif
        </div>
    </div>
    <div class="tab-pane fade" id="electronics" role="tabpanel">
        <div class="product_carousel product_style product_column4 owl-carousel">
            @if ($new_arrivals_electronics)
            @foreach ($new_arrivals_electronics as $product)
            <article class="single_product">
                <figure>
                    <div class="product_thumb">
                        <a class="primary_img" href="{{ route('client.product_details',$product->id) }}"><img
                                src="{{asset('images/product_image/'.$product->image)}}" alt=""></a>
                        <div class="label_product">
                            <span class="label_wishlist"><a class="btn-wishlist" href="javascript:void(0)"
                                    data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                    cus-product-id="{{ $product->id }}"
                                    cus-product-name="{{ ucwords($product->title) }}"
                                    cus-product-slug="{{ route('client.product_details',$product->id) }}"
                                    cus-price="{{ $product->mrp }}"
                                    cus-photo="{{ asset('images/product_image/'.$product->image)}}"
                                    cus-stock="{{ $product->has_stock }}" cus-date="{{ date('d M Y') }}"
                                    cus-time="{{ date('h:i a') }}">
                                    <i class="ion-android-favorite-outline"></i></a></span>
                        </div>
                        <div class="action_links">
                            <ul>

                                <li class="compare"><a href="{{ route('client.product_details',$product->id) }}"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        data-tippy="Add to cart"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i></a></li>
                                <li class="quick_button">
                                    <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="Quick View"
                                        quick-product="{{ $product->id }}" quick-url="{{ route('quickViewDetails') }}"
                                        product-url="{{ route('client.product_details',$product->id) }}"
                                        quick-asset="{{ asset('') }}"> <i class="ion-ios-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_content">
                        <div class="product_content_inner">
                            <h4 class="product_name"><a
                                    href="{{ route('client.product_details',$product->id) }}">{{ ucwords($product->title) }}</a>
                            </h4>
                            <div class="price_box">

                                @if($product->discount_amount > 0)
                                <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                                <span class="current_price">Tk
                                    {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                                @else
                                <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </figure>
            </article>
            @endforeach
            @endif
        </div>
    </div>
    <div class="tab-pane fade" id="gift" role="tabpanel">
        <div class="product_carousel product_style product_column4 owl-carousel">
            @if ($new_arrivals_gifts)
            @foreach ($new_arrivals_gifts as $product)
            <article class="single_product">
                <figure>
                    <div class="product_thumb">
                        <a class="primary_img" href="{{ route('client.product_details',$product->id) }}"><img
                                src="{{asset('images/product_image/'.$product->image)}}" alt=""></a>
                        <div class="label_product">
                            <span class="label_wishlist"><a class="btn-wishlist" href="javascript:void(0)"
                                    data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                    cus-product-id="{{ $product->id }}"
                                    cus-product-name="{{ ucwords($product->title) }}"
                                    cus-product-slug="{{ route('client.product_details',$product->id) }}"
                                    cus-price="{{ $product->mrp }}"
                                    cus-photo="{{ asset('images/product_image/'.$product->image)}}"
                                    cus-stock="{{ $product->has_stock }}" cus-date="{{ date('d M Y') }}"
                                    cus-time="{{ date('h:i a') }}">
                                    <i class="ion-android-favorite-outline"></i></a></span>
                        </div>
                        <div class="action_links">
                            <ul>

                                <li class="compare"><a href="{{ route('client.product_details',$product->id) }}"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        data-tippy="Add to cart"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i></a></li>
                                <li class="quick_button">
                                    <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="Quick View"
                                        quick-product="{{ $product->id }}" quick-url="{{ route('quickViewDetails') }}"
                                        product-url="{{ route('client.product_details',$product->id) }}"
                                        quick-asset="{{ asset('') }}"> <i class="ion-ios-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_content">
                        <div class="product_content_inner">
                            <h4 class="product_name"><a
                                    href="{{ route('client.product_details',$product->id) }}">{{ ucwords($product->title) }}</a>
                            </h4>
                            <div class="price_box">

                                @if($product->discount_amount > 0)
                                <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                                <span class="current_price">Tk
                                    {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                                @else
                                <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </figure>
            </article>
            @endforeach
            @endif
        </div>
    </div>
</div>


</div>
</div> --}}
<!--product area end-->

<!-- metro ads start -->
{{-- @if($ads)
        @foreach ($ads as $ad)
            @if ($ad->view_section == 'bellow_new_arrivals')
                @if ($ad->type == 'short')
                    <section class="shipping_area mb-0">
                        <div class="container-fluid px-0">
                            <div class="row g-0">
                                <div class="col-md-12 col-12"><a href="#"><img src="{{asset('images/ad/'.$ad->image)}}"
alt=""
class="img-fluid"></a></div>
</div>
</div>
</section>
@else
<section class="ad-banner mt-35 mb-35">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-12">
                <a href="javascript:void(0)" class="next-link-a">
                    <img src="{{asset('images/ad/'.$ad->image)}}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>
@endif
@endif
@endforeach
@endif --}}

<!-- metro ads end -->

<!--feature product area start-->
{{-- <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title s_title_style3">
                            <h2 class="text-uppercase">Featured Products</h2>
                        </div>
                        <div class="product_tab_btn d-flex">
                            <a href="{{ url('shop/Feature_Products/Feature_Products') }}" class="text-uppercase">
See More
</a>
</div>
</div>
</div>
</div>
<div class="tab-pane fade show active" id="Computer3" role="tabpanel">
    <div class="product_carousel product_style product_column4 owl-carousel">
        @if ($featureProducts)
        @foreach ($featureProducts as $product)
        <article class="single_product">
            <figure>
                <div class="product_thumb">
                    <a class="primary_img" href="{{ route('client.product_details',$product->id) }}"><img
                            src="{{asset('images/product_image/'.$product->image)}}" alt=""></a>
                    <div class="label_product">
                        <span class="label_wishlist"><a class="btn-wishlist" href="javascript:void(0)"
                                data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                cus-product-id="{{ $product->id }}" cus-product-name="{{ ucwords($product->title) }}"
                                cus-product-slug="{{ route('client.product_details',$product->id) }}"
                                cus-price="{{ $product->mrp }}"
                                cus-photo="{{ asset('images/product_image/'.$product->image)}}"
                                cus-stock="{{ $product->has_stock }}" cus-date="{{ date('d M Y') }}"
                                cus-time="{{ date('h:i a') }}">
                                <i class="ion-android-favorite-outline"></i></a></span>
                    </div>
                    <div class="action_links">
                        <ul>

                            <li class="compare"><a href="{{ route('client.product_details',$product->id) }}"
                                    data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                    data-tippy="Add to Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </li>
                            <li class="quick_button">
                                <a class="quickViewDetailsByPId" href="javascript:void(0)" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                    data-bs-target="#modal_box" data-tippy="Quick View"
                                    quick-product="{{ $product->id }}" quick-url="{{ route('quickViewDetails') }}"
                                    product-url="{{ route('client.product_details',$product->id) }}"
                                    quick-asset="{{ asset('') }}"> <i class="ion-ios-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a
                                href="{{ route('client.product_details',$product->id) }}">{{ $product->title }}</a>
                        </h4>
                        <div class="price_box">
                            @if($product->discount_amount > 0)
                            <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                            <span class="current_price">Tk
                                {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                            @else
                            <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </figure>
        </article>
        @endforeach
        @endif
    </div>
</div>
</div>
</div> --}}
@if ($view_sections)
@foreach ($view_sections as $viewSection)
@if ($viewSection->product)
<div class="product_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_header">
                    <div class="section_title s_title_style3">
                        <h2 class="text-uppercase">{{ $viewSection->title }}</h2>
                    </div>
                    <div class="product_tab_btn d-flex">
                        <a href="{{ url('shop/section/'.$viewSection->id) }}" class="text-uppercase">
                            See More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show active" id="Computer3" role="tabpanel">
            <div class="product_carousel product_style product_column4 owl-carousel">
                @if ($viewSection->product)
                @foreach ($viewSection->product as $product)
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="{{ route('client.product_details',$product->id) }}"><img
                                    src="{{asset('images/product_image/'.$product->image)}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_wishlist"><a class="btn-wishlist" href="javascript:void(0)"
                                        data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                        cus-product-id="{{ $product->id }}"
                                        cus-product-name="{{ ucwords($product->title) }}"
                                        cus-product-slug="{{ route('client.product_details',$product->id) }}"
                                        cus-price="{{ $product->mrp }}"
                                        cus-photo="{{ asset('images/product_image/'.$product->image)}}"
                                        cus-stock="{{ $product->has_stock }}" cus-date="{{ date('d M Y') }}"
                                        cus-time="{{ date('h:i a') }}">
                                        <i class="ion-android-favorite-outline"></i></a></span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="compare"><a href="{{ route('client.product_details',$product->id) }}"
                                            data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                            data-tippy="Add to Cart"><i class="fa fa-shopping-cart"
                                                aria-hidden="true"></i></a></li>
                                    <li class="quick_button">
                                        <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                            data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                                            data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="Quick View"
                                            quick-product="{{ $product->id }}"
                                            quick-url="{{ route('quickViewDetails') }}"
                                            product-url="{{ route('client.product_details',$product->id) }}"
                                            quick-asset="{{ asset('') }}"> <i class="ion-ios-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_content_inner">
                                <h4 class="product_name"><a
                                        href="{{ route('client.product_details',$product->id) }}">{{ $product->title }}</a>
                                </h4>
                                <div class="price_box">
                                    @if($product->discount_amount > 0)
                                    <span class="old_price">Tk {{ number_format($product->mrp,2) }}</span>
                                    <span class="current_price">Tk
                                        {{ number_format($product->mrp-$product->discount_amount,2) }}</span>
                                    @else
                                    <span class="current_price">Tk {{ number_format($product->mrp,2) }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </figure>
                </article>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
@endif



{{-- @if($ads)
        @foreach ($ads as $ad)
            @if ($ad->view_section == 'bellow_featured_products')
                @if ($ad->type == 'short')
                    <section class="shipping_area mb-0">
                        <div class="container-fluid px-0">
                            <div class="row g-0">
                                <div class="col-md-12 col-12"><a href="#"><img src="{{asset('images/ad/'.$ad->image)}}"
alt=""
class="img-fluid"></a></div>
</div>
</div>
</section>
@else
<section class="ad-banner mt-35 mb-35">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-12">
                <a href="javascript:void(0)" class="next-link-a">
                    <img src="{{asset('images/ad/'.$ad->image)}}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>
@endif
@endif
@endforeach
@endif --}}
<!-- feature product area end-->

{{-- @if (count($product_types) > 0)
        <!-- $product_types start -->
        <section class="ad-banner mt-35 mb-60">
            <div class="container">
                <div class="row">
                    <div class="product_carousel product_style product_column4 owl-carousel">
                        @foreach ($product_types as $product_type)
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img"
                                           href="{{ url('shop/product_type',$product_type->id) }}"><img
    src="{{ asset('images/product_type/'.$product_type->image) }}" alt=""></a>
</div>
</figure>
</article>
@endforeach
</div>
</div>
</div>
</section>
@endif --}}

@if($ads)
@foreach ($ads as $ad)
@if ($ad->view_section == 'bellow_product_type')
@if ($ad->type == 'short')
<section class="shipping_area mb-0">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-md-12 col-12"><a href="#"><img src="{{asset('images/ad/'.$ad->image)}}" alt=""
                        class="img-fluid"></a></div>
            {{-- <div class="col-md-6 col-12"><a href="#"><img src="{{asset('client/assets')}}/img/api-image/bkashapi2.jpg"
            alt=""
            class="img-fluid"></a>
        </div> --}}
    </div>
    </div>
</section>
@else
<section class="ad-banner mt-35 mb-35">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-12">
                <a href="javascript:void(0)" class="next-link-a">
                    <img src="{{asset('images/ad/'.$ad->image)}}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>
@endif
@endif
@endforeach
@endif
<!-- four ads image -->

</div>
<!--home section bg area end-->
<!--our certificate  area start-->
<div class="our_certificate">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="our_partners_Title">
                            <h2>Short Documentary</h2>
                        </div>
                        @if (!empty($urls))    
                            <div class="blog_container blog_column4 owl-carousel">
                                @foreach ($urls as $item)    
                                    <article class="single_blog">
                                        <figure>
                                            <div class="youtube_frame">
                                            <iframe class="youtube_video" src="{{$item->url}}"></iframe>
                                            </div>
                                        </figure>
                                    </article> 
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
</div>
<!--our certificate area end-->
@endsection
@push('scripts')
<Script>
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
