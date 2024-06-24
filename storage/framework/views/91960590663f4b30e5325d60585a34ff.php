

<?php $__env->startSection('css'); ?>
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/vendors.min.css')); ?>">
<link rel="stylesheet" type="text/css"
    href="<?php echo e(asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css')); ?>">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/bootstrap-extended.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/colors.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/components.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/themes/dark-layout.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/themes/semi-dark-layout.css')); ?>">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="<?php echo e(asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/assets/css/style.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/pages/app-invoice.css')); ?>">
<!-- END: Custom CSS-->
<style>
    a label {
        cursor: pointer;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-header row">
</div>
<div class="content-body">
    <!-- app invoice View Page -->
    <section class="invoice-view-wrapper">
        <div class="row">
            <!-- invoice view page -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-print-area">
                    <div class="card-content">
                        <div class="card-body pb-0 mx-25">
                            <!-- header section -->
                            <div class="row">
                                <div class="col-xl-4 col-md-12">
                                    <span class="invoice-number mr-50">Invoice#</span>
                                    <span>ABRAR-<?php echo e($order->id); ?></span>
                                </div>
                                <div class="col-xl-8 col-md-12">
                                    <div class="d-flex align-items-center justify-content-xl-end flex-wrap">
                                        <div class="mr-3">
                                            <small class="text-muted">Order Date:</small>
                                            <span><?php echo e(date('d M Y',strtotime($order->created_at))); ?></span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- logo and title -->
                            <div class="row my-3">
                                <div class="col-6">
                                    <h4 class="text-primary">Abrar Mart</h4>
                                    <span>Phone: <?php echo e($company->phone); ?></span> <br>
                                    <span>Email: <?php echo e($company->email); ?></span>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <img src="<?php echo e(asset('images/company/'.$company->logo)); ?>" alt="logo" height="46" width="164">
                                </div>
                            </div>
                            <hr>
                            <!-- invoice address and contact -->
                            <div class="row invoice-info">
                                <div class="col-6 mt-1">
                                    <h6 class="invoice-from">Customer Info</h6>
                                    <div class="mb-1">
                                        <span><?php echo e($order->user->name); ?></span>
                                    </div>
                                    <div class="mb-1">
                                        <span><?php echo e($order->user->address); ?></span>
                                    </div>
                                    <div class="mb-1">
                                        <span><?php echo e($order->user->email); ?></span>
                                    </div>
                                    <div class="mb-1">
                                        <span><?php echo e($order->user->phone); ?></span>
                                    </div>
                                </div>
                                
                            </div>
                            <hr>
                        </div>
                        <!-- product details table-->
                        <div class="invoice-product-details table-responsive mx-md-25">
                            <table class="table table-borderless mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th scope="col">Item</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Cost</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col" class="text-right">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sum = 0;
                                    ?>
                                    <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->product->title); ?></td>
                                        <td><?php if($item->variation): ?>
                                            <?php echo e($item->variation->size); ?>

                                        <?php endif; ?></td>
                                        <td><?php echo e($item->price); ?></td>
                                        <td><?php echo e($item->quantity); ?></td>
                                        <td class="text-primary text-left font-weight-bold"><?php echo e($item->price*$item->quantity); ?>Tk</td>
                                        <?php
                                            $sum +=$item->price*$item->quantity
                                        ?>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- invoice subtotal -->
                        <div class="card-body pt-0 mx-25">
                            <hr>
                            <div class="row">
                                <div class="col-4 col-sm-6 mt-75">
                                    <p>Powered By Zariq Ltd.</p>
                                </div>
                                <div class="col-8 col-sm-6 d-flex justify-content-end mt-75">
                                    <div class="invoice-subtotal">
                                        
                                        <div class="invoice-calc d-flex justify-content-between">
                                            <span class="invoice-title">Invoice Total</span>
                                            <span class="invoice-value"><?php echo e($sum); ?>Tk</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- invoice action  -->
            <div class="col-xl-3 col-md-4 col-12">
                <div class="card invoice-action-wrapper shadow-none border">
                    <div class="card-body">
                        
                        <div class="invoice-action-btn">
                            <button class="btn btn-light-primary btn-block invoice-print">
                                <span>print</span>
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- BEGIN: Vendor JS-->
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/vendors.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')); ?>"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')); ?>">
</script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/vfs_fonts.js')); ?>"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo e(asset('admin_template/app-assets/js/core/app-menu.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/js/core/app.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/js/scripts/components.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/js/scripts/footer.js')); ?>"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?php echo e(asset('admin_template/app-assets/js/scripts/datatables/datatable.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/js/scripts/pages/app-invoice.js')); ?>"></script>
<!-- END: Page JS-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/abrarmart.com/resources/views/server/order/invoice.blade.php ENDPATH**/ ?>