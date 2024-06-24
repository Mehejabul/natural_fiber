<?php $__env->startSection('css'); ?>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/vendors.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/charts/apexcharts.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/pickers/daterange/daterangepicker.css')); ?>">
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
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/assets/css/style.css')); ?>">
    <!-- END: Custom CSS-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo e(route('admin.dashboard')); ?>"
                                        ><i class="bx bx-home-alt"></i
                                    ></a>
                                </li>
                                
                                <li class="breadcrumb-item active">
                                    Create Product Variation
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
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
            <!-- Basic Inputs start -->
            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content">
                                <form action="<?php echo e(Route('product-variation.store')); ?>" method="post"> <?php echo csrf_field(); ?>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <fieldset>
                                                    <h5>Product Title</h5>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                        </div>
                                                       
                                                       <input type="text" list="product" name="product_id" class="form-control" required>
                                                       <datalist id="product">
                                                        <?php if($products): ?>
                                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($product->code); ?>">
                                                                    <?php echo e(ucwords($product->title)); ?>

                                                                    (Stock:
                                                                    <?php if($product->stock): ?>
                                                                    <?php echo e($product->stock->quantity); ?>

                                                                    <?php endif; ?>
                                                                    )
                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                       </datalist>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <h1>Product Variation</h1>
                                                            <div class="row mt-2">
                                                                <div class="repeater-default">
                                                                    <div data-repeater-list="group-product">
                                                                        <div data-repeater-item>
                                                                            <div class="row justify-content-between" id='product_details'>
                                                                                <div class="col-md-2 col-sm-12 form-group">
                                                                                    <label for="product_variations_id">Size</label>
                                                                                    <select name="product_variations_id" id="product_variations_id"
                                                                                        class="form-control">
                                                                                        <option value="">--select--</option>
                                                                                        <?php if(isset($sizes)): ?>
                                                                                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <option value="<?php echo e($size->id); ?>">
                                                                                                    <?php echo e($size->size); ?></option>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php endif; ?>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                                <div class="col-md-2 col-sm-12 form-group">
                                                                                    <label for="qnt">Quantity</label>
                                                                                    <input type="number" class="form-control" id="product_qnt"
                                                                                        name="qnt" placeholder="0" >
                                                                                </div>
                                                                                
                                                                                <div
                                                                                    class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                                    <button class="btn btn-danger text-nowrap px-1"
                                                                                        data-repeater-delete type="button"> <i
                                                                                            class="bx bx-x"></i>
                                                                                        Delete
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col p-0">
                                                                            <button class="btn btn-primary" data-repeater-create type="button" id="product"><i
                                                                                    class="bx bx-plus"></i>
                                                                                Add
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <button type="submit" class="btn btn-primary mt-2 btn-lg mx-1">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Inputs end -->
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
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/charts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/pickers/daterange/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/pickers/daterange/daterangepicker.js')); ?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo e(asset('admin_template/app-assets/js/core/app-menu.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/js/core/app.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/js/scripts/components.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/js/scripts/footer.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/js/scripts/forms/form-repeater.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')); ?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo e(asset('admin_template/app-assets/js/scripts/pages/table-extended.js')); ?>"></script>
    <!-- END: Page JS-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/abrarmart.com/resources/views/server/product-variation/create.blade.php ENDPATH**/ ?>