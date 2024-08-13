<?php echo $__env->make('client.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--Offcanvas menu area start-->
<?php echo $__env->make('client.layouts.secondary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--Offcanvas menu area end-->
<!-- secondary header start -->

<!-- secondary header end -->

<section class="product_catgory_section">
    <div class="container">
        <div class="product_category_wrap">
          <div class="row">
            <?php if($categories): ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3">
                <div class="product_category_image">
                    <a class="primary_img" href="<?php echo e(url('shop/category/'.$category->id)); ?>"><img
                    src="<?php echo e(asset('images/category/'.$category->image)); ?>" alt=""></a>
                    
                    <div class="category_image_title">
                       <h5 class="mt-2"><a 
                                    href="<?php echo e(url('shop/category/'.$category->id)); ?>"><?php echo e($category->name); ?></a>
                        
                        </h5> 
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            
          </div>
        </div>
    </div>
</section>

<?php $__env->startSection('content'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<Script>
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

<?php echo $__env->make('client.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH G:\natural_fiber\resources\views/client/category.blade.php ENDPATH**/ ?>