<?php $__env->startSection('content'); ?>

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo e(route('client.home')); ?>">home</a></li>
                            <li><?php echo e($product->title); ?></li>
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
                                        <img id="zoom1" src="<?php echo e(asset('images/product_image/'.$product->image)); ?>"
                                            data-zoom-image="<?php echo e(asset('images/product_image/'.$product->image)); ?>" alt="big-1">
                                    </a>
                                </div>
                                <?php if($product->images): ?>
                                    <div class="single-zoom-thumb">
                                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01" style="padding-left: 0px !important;">
                                            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a href="javascript:void(0)" class="elevatezoom-gallery active" data-update=""
                                                       data-image="<?php echo e(asset('images/multiImage/'.$image->image)); ?>"
                                                       data-zoom-image="<?php echo e(asset('images/multiImage/'.$image->image)); ?>">
                                                        <img src="<?php echo e(asset('images/multiImage/'.$image->image)); ?>" alt="zo-th-1" />
                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="product_d_right">


                                    <h3><a href="<?php echo e(route('client.product_details',$product->id)); ?>"><?php echo e($product->title); ?></a></h3>
                                    <div class="price_box">
                                         <?php if($product->discount_amount > 0): ?>
                                                    <span class="old_price">Tk <?php echo e(number_format($product->mrp,2)); ?></span>
                                                    <span class="current_price">Tk <?php echo e(number_format($product->mrp-$product->discount_amount,2)); ?></span>
                                                    <?php else: ?>
                                                    <span class="current_price">Tk <?php echo e(number_format($product->mrp,2)); ?></span>
                                                    <?php endif; ?>
                                    </div>
                                    <div class="product_variant size">

                                        <div class="slect_color">
                                            <span>Color :</span>
                                            <span class="color"><?php echo e($product->color); ?></span>
                                        </div>
                                    </div>
                                   <?php if(count($product->productvariation) > 0): ?>
                                    
                                    <div class="product_variant size">
                                        <label>sizes</label>
                                        <ul class="product_details_nav">
                                            <?php $__currentLoopData = $product->productvariation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="hidden" id="sizeId" value='<?php echo e($size->id); ?>'>
                                                <li class="product_details_nav_item <?php if($size->quantity == 0): ?> no-stock  <?php endif; ?>">
                                                    <a href="javascript:void(0)" data-stock="<?php echo e($size->quantity); ?>"
                                                       data-size="<?php echo e($size->productvariation->size); ?>"
                                                       variationID="<?php echo e($size->productvariation->id); ?>"
                                                       class="product_details_nav_link sizeClick"><?php echo e($size->productvariation->size); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>

                                        <p id="sizeColorSelectError"
                                           style="padding-top: 10px; font-size: 12px !important; color: red;">
                                            <span></span></p>
                                    </div>

                                <?php endif; ?>








                                    <div class="product_arrow d-flex mt-4">
                                        <button id="btn-cart" class="button btn-cart"
                                                cus-product-id="<?php echo e($product->id); ?>"
                                                cus-product-name="<?php echo e(ucwords($product->title)); ?>"
                                                cus-product-slug="<?php echo e(route('client.product_details',$product->id)); ?>"
                                                cus-price="<?php if($product->discount_amount > 0): ?> <?php echo e($product->mrp-$product->discount_amount); ?> <?php else: ?> <?php echo e($product->mrp); ?> <?php endif; ?>"
                                                cus-photo="<?php echo e(asset('images/product_image/'.$product->image)); ?>" >
                                           add to cart</button>
                                        <span class="wishlist">
                                            <a class="btn-wishlist"
                                               href="javascript:void(0)"
                                               data-tippy-placement="top"
                                               data-tippy-arrow="true" data-tippy-inertia="true"

                                               cus-product-id="<?php echo e($product->id); ?>"
                                               cus-product-name="<?php echo e(ucwords($product->title)); ?>"
                                               cus-product-slug="<?php echo e(route('client.product_details',$product->id)); ?>"
                                               cus-price="<?php echo e($product->mrp); ?>"
                                               cus-photo="<?php echo e(asset('images/product_image/'.$product->image)); ?>"
                                               cus-stock="<?php echo e($product->has_stock); ?>"
                                               cus-date="<?php echo e(date('d M Y')); ?>"
                                               cus-time="<?php echo e(date('h:i a')); ?>"
                                            >
                                                        <i class="ion-android-favorite-outline"></i></a>
                                        </span>
                                    </div>

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
                                                        <?php echo $product->details_description; ?>

                                                    </div>
                                                </div>
                                            </div>

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="#">
                                                        <button class="accordion-button sizeGuidePhoto" type="button"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                                size-product-photo = "<?php echo e($product->size_guide ? asset('images/product_sizeguide/'.$product->size_guide) : asset('images/company/'.$company->size_guide)); ?>"
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
                    <?php if(App\Models\product::where('category_id',$product->category_id)->get()): ?>
                        <?php $__currentLoopData = App\Models\product::where('category_id',$product->category_id)->get()->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="<?php echo e(route('client.product_details',$product->id)); ?>"><img
                                                src="<?php echo e(asset('images/product_image/' .$product->image)); ?>" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_wishlist"><a class="btn-wishlist"
                                                                            href="javascript:void(0)"
                                                                            data-tippy-placement="top"
                                                                            data-tippy-arrow="true" data-tippy-inertia="true"

                                                                            cus-product-id="<?php echo e($product->id); ?>"
                                                                            cus-product-name="<?php echo e(ucwords($product->title)); ?>"
                                                                            cus-product-slug="<?php echo e(route('client.product_details',$product->id)); ?>"
                                                                            cus-price="<?php echo e($product->mrp); ?>"
                                                                            cus-photo="<?php echo e(asset('images/product_image/'.$product->image)); ?>"
                                                                            cus-stock="<?php echo e($product->has_stock); ?>"
                                                                            cus-date="<?php echo e(date('d M Y')); ?>"
                                                                            cus-time="<?php echo e(date('h:i a')); ?>"
                                                >
                                                        <i class="ion-android-favorite-outline"></i></a></span>
                                        </div>
                                        <div class="action_links">
                                            <ul>





                                                <li class="compare"><a href="javascript:void(0)" data-tippy-placement="top"
                                                        data-tippy-arrow="true" data-tippy-inertia="true"
                                                        onclick="addToCart(<?php echo e($product->id); ?>,1)"
                                                        data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button">
                                                    <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                                       data-tippy-placement="top"
                                                       data-tippy-arrow="true"
                                                       data-tippy-inertia="true"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#modal_box"
                                                       data-tippy="Quick View"
                                                       quick-product="<?php echo e($product->id); ?>"
                                                       quick-url="<?php echo e(route('quickViewDetails')); ?>"
                                                       product-url="<?php echo e(route('client.product_details',$product->id)); ?>"
                                                       quick-asset="<?php echo e(asset('')); ?>"
                                                    > <i class="ion-ios-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a
                                                    href="<?php echo e(route('client.product_details',$product->id)); ?>"><?php echo e($product->title); ?></a>
                                            </h4>
                                            <div class="price_box">
                                                 <?php if($product->discount_amount > 0): ?>
                                                    <span class="old_price">Tk <?php echo e(number_format($product->mrp,2)); ?></span>
                                                    <span class="current_price">Tk <?php echo e(number_format($product->mrp-$product->discount_amount,2)); ?></span>
                                                    <?php else: ?>
                                                    <span class="current_price">Tk <?php echo e(number_format($product->mrp,2)); ?></span>
                                                    <?php endif; ?>
                                        </div>




                                    </div>
                                </figure>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </section>
            <!--product area end-->
        </div>
    </div>
    <!-- product details end -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
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
            url: "<?php echo e(route('wishlist.store')); ?>",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
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
            url: "<?php echo e(route('cart.store')); ?>",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
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
            url: "<?php echo e(route('cart.wishlist.count')); ?>",
            success: function (data) {
                if (data.status == 200) {
                    $("#cart_count").html(data.cartCount);
                    $("#wishlist_count").html(data.wishlistCount);
                }
            }
        })
    }

</Script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\abrar_old\resources\views/client/product_details.blade.php ENDPATH**/ ?>