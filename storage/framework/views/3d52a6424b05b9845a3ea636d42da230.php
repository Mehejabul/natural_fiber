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
    <!-- END: Custom CSS-->
    <style>
        a label {
            cursor: pointer;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success: </strong><?php echo e(Session::get('success')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Success: </strong><?php echo e(Session::get('error')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <h5 class="content-header-title float-left pr-1 mb-0">Stock Management Table</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">All Product Details
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-primary">Product Stock List</h5>
                            <div class="heading-elements">
                                
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Product Title</th>
                                                <th>Stock Capacity</th>
                                                <th>Stock Alert</th>
                                                <th>Available Stock</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($stocks): ?>
                                                <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $sum = 0
                                                ?>
                                                    <tr>
                                                        <td class="text-primary"><?php echo e($stock->product->title); ?></td>
                                                        <td><?php echo e($stock->quantity); ?></td>
                                                         <td><span class="text-danger"><?php echo e($stock->product->alert_stock); ?></span></td>
                                                      <!--<td><?php if($stock->product->productvariation): ?>-->
                                                      <!--      <?php $__currentLoopData = $stock->product->productvariation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                                                      <!--          <?php-->
                                                      <!--              $sum += $variation->quantity-->
                                                      <!--          ?>-->
                                                      <!--      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                                                      <!--          <span class="<?php if($stock->product->alert_stock >= $sum): ?>-->
                                                      <!--              text-danger-->
                                                      <!--          <?php endif; ?>"><?php echo e($sum); ?></span>-->
                                                      <!--      <?php else: ?>-->
                                                      <!--      0-->
                                                      <!--  <?php endif; ?></td>-->
                                                      <td>
                                                                <span class="<?php if($stock->product->alert_stock >= $stock->available_qty): ?>
                                                                    text-danger
                                                                <?php endif; ?>"><?php echo e($stock->available_qty); ?></span>

                                                        </td>
                                                         

                                                        <td>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    
                                                                        <a class="dropdown-item" href="<?php echo e(route('stock.show',$stock->id)); ?>"><i class="bx bxs-spreadsheet mr-1"></i> Details</a>
                                                                    
                                                                    
                                                                        <a class="dropdown-item" href="<?php echo e(route('stock.edit',$stock->id)); ?>"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    
                                                                    

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php echo e('No Data Found'); ?>

                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Product Title</th>
                                                <th>Stock Capacity</th>
                                                <th>Available Stock</th>
                                                <th>Stock Alert</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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
    <!-- END: Page JS-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/abrarmart.com/resources/views/server/stock/index.blade.php ENDPATH**/ ?>