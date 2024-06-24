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
                        <form action="<?php echo e(route('searchPage')); ?>" method="get">
                            <div class="search_box">
                                <input name="keyword" autocorrect="off" placeholder="Search product..." type="text">
                                <button type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                    <div id="menu" class="text-start ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="<?php echo e(route('client.home')); ?>">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="<?php echo e(url('shop')); ?>">Shop</a>
                            </li>

                            <?php $__currentLoopData = App\Models\Catalogue::with('category')->get()->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0)"><?php echo e($catalogue->name); ?></a>
                                    <?php if($catalogue->category): ?>
                                        <ul class="sub-menu">
                                            <?php $__currentLoopData = $catalogue->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="menu-item-has-children">
                                                    <a href="<?php echo e(url('shop/category/'.$category->id)); ?>"><?php echo e($category->name); ?></a>
                                                    <?php if(count($category->subcategories) > 0): ?>
                                                        <ul class="sub-menu">
                                                            <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li>
                                                                    <a href="<?php echo e(url('shop/category/'.$subcategory->id)); ?>"><?php echo e($subcategory->name); ?></a>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <li class="menu-item-has-children">
                                <a href="<?php echo e(route('client.account')); ?>">my account</a>
                            </li>

                        </ul>
                    </div>










                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->
<!--header area start-->
<header>
    <div class="main_header">
        <div class="container">
            <!--header top start-->
            <div class="header_top">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="antomi_message">
                            <p>Step into the festival season with Abrar E-commerce</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="header_top_settings text-end">
                            <ul>
                                <li>Hotline: <a href="tel:<?php echo e($company->phone); ?>"><?php echo e($company->phone); ?> </a></li>
                                <li><a href="<?php echo e(route('client.account')); ?>">My Account</a></li>
                                
                                <li>Quality Guarantee Of Products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->

            <!--header middel start-->
            <div class="header_middle sticky-header">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="logo">
                            <a href="<?php echo e(route('client.home')); ?>"><img src="<?php if($company->logo): ?>
                                    <?php echo e(asset('images/company/'.$company->logo)); ?>

                                <?php endif; ?>"alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="main_menu menu_position text-center">
                            <nav>
                                <ul>
                                    <li><a class="active" href="<?php echo e(route('client.home')); ?>">home</a></li>
                                    <li><a class="" href="<?php echo e(route('client.shop')); ?>">shop</a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 col-6">
                        <div class="header_configure_area">
                            <div class="header_wishlist">
                                <a href="<?php echo e(url('/wishlist')); ?>"><i class="ion-android-favorite-outline"></i>
                                    <span class="wishlist_count wishlist-count">1</span>
                                </a>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-shopping-bag"></i>

                                    <span class="cart_count cart-count">1</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->

            <!--mini cart-->
            <?php if ($__env->exists('client.layouts._mini_cart')) echo $__env->make('client.layouts._mini_cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--mini cart end-->

            <!--header bottom satrt-->
            <div class="header_bottom" style="padding-bottom: 5px;">
                <div class="row align-items-center">
                    <div class="column1 col-lg-3 col-md-6">
                       <?php if ($__env->exists('client.layouts._all_categories')) echo $__env->make('client.layouts._all_categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="column2 col-lg-6 ">
                        <div class="search_container">
                            <form action="<?php echo e(route('searchPage')); ?>" method="get">
                                <div class="search_box">
                                    <input name="keyword" autocorrect="off" placeholder="Search product..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="column3 col-lg-3 col-md-6">
                        <div class="header_bigsale">
                            <a href="<?php echo e(route('client.shop')); ?>">BIG SALE GOING ON</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div>
    </div>
</header>
<!--header area end-->
<?php /**PATH /home/zariijsr/abrarmart.com/resources/views/client/layouts/menu.blade.php ENDPATH**/ ?>