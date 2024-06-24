<?php $__env->startSection('content'); ?>

<!--breadcrumbs area start-->
<br><br>
    <div class="breadcrumbs_area" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo e(route('client.home')); ?>">home</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

         <!-- my account start  -->
    <div class="account_page_bg">
        <div class="container">
            <section class="main_content_area">
                <div class="account_dashboard">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <!-- Nav tabs -->
                            <div class="dashboard_tab_button">
                                <ul role="tablist" class="nav flex-column dashboard-list">
                                    <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link">Dashboard</a></li>
                                    <li> <a href="#orders" data-bs-toggle="tab" class="nav-link active">Orders</a></li>
                                    


                                    <li><a href="<?php echo e(route('user.logout')); ?>" class="nav-link">logout</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard_content">
                                <div class="tab-pane fade" id="dashboard">
                                    <h3>Dashboard </h3>
                                    <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                                </div>
                                <div class="tab-pane fade show active" id="orders">
                                    <h3>Orders</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Product Cost</th>
                                                    <th>Shipping Cost</th>
                                                    <th>Total</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($orderlist): ?>
                                                    <?php $__currentLoopData = $orderlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($order->id); ?></td>
                                                        <td><?php echo e(date('d M Y h:i A ',strtotime($order->created_at))); ?></td>
                                                        <td><span class="success"><?php echo e($order->status); ?></span></td>
                                                        <td>Tk <?php echo e(number_format($order->subtotal,2)); ?></td>
                                                        <td>Tk <?php echo e(number_format($order->shipping,2)); ?></td>
                                                        <td>Tk <?php echo e(number_format($order->total,2)); ?></td>


                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane" id="address">
                                    <p>The following addresses will be used on the checkout page by default.</p>
                                    <h4 class="billing-address">Billing address</h4>

                                    <p><strong>Bobby Jackson</strong></p>
                                    <address>
                                        <span><strong>City:</strong> Seattle</span>,
                                        <br>
                                        <span><strong>State:</strong> Washington(WA)</span>,
                                        <br>
                                        <span><strong>ZIP:</strong> 98101</span>,
                                        <br>
                                        <span><strong>Country:</strong> USA</span>
                                    </address>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- my account end   -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/abrarmart.com/resources/views/client/account.blade.php ENDPATH**/ ?>