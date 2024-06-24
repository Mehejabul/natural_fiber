<?php $__env->startSection('content'); ?>
   <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo e(route('client.home')); ?>">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer register start -->
    <div class="login_page_bg">
        <div class="container">
            <div class="customer_login">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 col-md-6">
                        <div class="account_form register">
                            <h2 class="text-center">Register</h2>
                            <form action="<?php echo e(route('customer.register')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="text" hidden name="type" value="Customer">
                                  <p>
                                    <label> Name <span>*</span></label>
                                    <input type="text" name="name" required>
                                </p>
                                <p>
                                    <label>Email address <span>*</span></label>
                                    <input type="text" name="email" required>
                                </p>

                                 <p>
                                    <label>Phone <span>*</span></label>
                                    <input type="text" name="phone" required>
                                </p>
                                <p>
                                    <label>Address <span>*</span></label>
                                    <input type="text" name="address" required>
                                </p>
                                 <p>
                                    <label>Passwords <span>*</span></label>
                                    <input type="password" name="password" required>
                                </p>
                                <div class="login_submit">
                                    <button type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- customer register end -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/abrarmart.com/resources/views/client/register.blade.php ENDPATH**/ ?>