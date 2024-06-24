@extends('client.layouts.main')

@section('content')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('client.home')}}">home</a></li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--wishlist area start -->
    <div>
        <div class="container">
            <div class="wishlist_area">
                <div class="wishlist_inner">
                    <form action="#">
{{--                        @if ($items->count())--}}
                            <div class="row wishlistDataDiv">
                                <div class="col-12">
                                    <div class="table_desc wishlist">
                                        <div class="cart_page table-responsive">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product_remove">Delete</th>
                                                        <th class="product_thumb">Image</th>
                                                        <th class="product_thumb">Added Date</th>
                                                        <th class="product_name">Product</th>
                                                        <th class="product-price">Price</th>
{{--                                                        <th class="product_quantity">Stock Status</th>--}}
                                                        <th class="product_total">Add To Cart</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="wishlist-page-view">
{{--                                                    @foreach ($items as $item)--}}
{{--                                                        <tr>--}}
{{--                                                            <td class="product_remove"><a href="javascript:void(0)" onclick="removeFromWishlist('{{ $item->rowId }}')">X</a></td>--}}
{{--                                                            <td class="product_thumb"><a href="{{ route('client.product_details',$item->model->id) }}"><img src="{{asset('images/product_image/'.$item->model->image)}}" alt=""></a></td>--}}
{{--                                                            <td class="product_name"><a href="{{ route('client.product_details',$item->model->id) }}">{{ $item->model->title }}</a></td>--}}
{{--                                                            <td class="product-price">{{ $item->model->mrp }}৳</td>--}}
{{--                                                            <td class="product_quantity">--}}
{{--                                                                @if ($item->model->has_stock == "Yes")--}}
{{--                                                                In Stock--}}
{{--                                                                @else--}}
{{--                                                                Stock Out--}}
{{--                                                                @endif--}}
{{--                                                            </td>--}}
{{--                                                            <td class="product_total"><a href="javascript:void(0)" onclick="moveToCart('{{ $item->rowId }}')">Add To Cart</a></td>--}}
{{--                                                        </tr>--}}
{{--                                                    @endforeach--}}

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12 text-end">--}}
{{--                                    <a href="javascript:void(0)" onclick="clearWishlist()">Clear All Items</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @else--}}
                            <div class="row wishlistEmptyDiv">
                                <div class="col-md-12 text-center">
                                    <h2>Your wishlist is empty !</h2>
                                    <h5 class="mt-3">Add items to it now.</h5>
                                    <a href="{{ route('client.shop') }}" class="btn btn-warning mt-5">Shop Now</a>
                                </div>
                            </div>
{{--                        @endif--}}

                    </form>
                </div>
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="wishlist_share">
                            <h4>Share on:</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>


    <!--wishlist area end -->
    <form id="deletedFromWishlist" action="{{ route('wishlist.remove') }}" method="POST">
        @csrf
        @method('delete')
        <input type="hidden" name="rowId" id="rowId">
    </form>

    <form id="clearWishlist" action="{{ route('wishlist.clear') }}" method="post">
        @csrf
        @method('delete')
    </form>

    <form id="moveToCart" action="{{ route('wishlist.move.to.cart') }}" method="post">
        @csrf
        <input type="hidden" name="rowId" id="mrowId">
    </form>

@endsection

@push('scripts')
{{--    <script>--}}
{{--        function removeFromWishlist(rowId)--}}
{{--        {--}}
{{--            $("#rowId").val(rowId);--}}
{{--            $("#deletedFromWishlist").submit();--}}
{{--        }--}}

{{--        function clearWishlist()--}}
{{--        {--}}
{{--            $("#clearWishlist").submit();--}}
{{--        }--}}
{{--        function moveToCart(rowId)--}}
{{--        {--}}
{{--            $("#mrowId").val(rowId);--}}
{{--            $("#moveToCart").submit();--}}
{{--        }--}}
{{--    </script>--}}
@endpush
