<?php $__env->startSection('content'); ?>

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo e(route('client.home')); ?>">home</a></li>
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

                                                        <th class="product_total">Add To Cart</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="wishlist-page-view">

















                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>






                            <div class="row wishlistEmptyDiv">
                                <div class="col-md-12 text-center">
                                    <h2>Your wishlist is empty !</h2>
                                    <h5 class="mt-3">Add items to it now.</h5>
                                    <a href="<?php echo e(route('client.shop')); ?>" class="btn btn-warning mt-5">Shop Now</a>
                                </div>
                            </div>


                    </form>
                </div>
                
            </div>
        </div>
    </div>


    <!--wishlist area end -->
    <form id="deletedFromWishlist" action="<?php echo e(route('wishlist.remove')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <input type="hidden" name="rowId" id="rowId">
    </form>

    <form id="clearWishlist" action="<?php echo e(route('wishlist.clear')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
    </form>

    <form id="moveToCart" action="<?php echo e(route('wishlist.move.to.cart')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="rowId" id="mrowId">
    </form>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

















<?php $__env->stopPush(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/abrarmart.com/resources/views/client/wishlist.blade.php ENDPATH**/ ?>