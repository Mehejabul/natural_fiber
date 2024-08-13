

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
                <h5 class="content-header-title float-left pr-1 mb-0">Company Details</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('company-details.index')); ?>">Details</a>
                        </li>
                        <li class="breadcrumb-item active">Details Edit
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
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <form action="<?php echo e(route('company-details.update',$details->id)); ?>" method="post" enctype="multipart/form-data"> <?php echo csrf_field(); ?> <?php echo method_field('put'); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <fieldset>
                                            <h5>Logo</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="logo" onchange="loadFile(event)">
                                            </div>
                                        </fieldset>
                                        <?php if($details->logo != null): ?>
                                        <img src="<?php echo e(asset('images/company/'.$details->logo)); ?>" id="output" alt="logo" width="600px" height="200px" class="mt-2 mx-1">
                                        <?php endif; ?>
                                        <fieldset class="mt-2">
                                            <h5>Favicon</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="favicon" onchange="loadFavicon(event)">
                                            </div>
                                        </fieldset>
                                        <?php if($details->favicon != null): ?>
                                        <img src="<?php echo e(asset('images/company/'.$details->favicon)); ?>" id="favicon" alt="favicon" width="100px" class="mt-2 mx-1">
                                        <?php endif; ?>
                                        <fieldset class="mt-2">
                                            <h5>Size Guide</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="size_guide" onchange="loadSize(event)">
                                            </div>
                                        </fieldset>
                                        <?php if($details->size_guide != null): ?>
                                        <img src="<?php echo e(asset('images/company/'.$details->size_guide)); ?>" id="size_guide" alt="size_guide" width="100px" class="mt-2 mx-1">
                                        <?php endif; ?>
                                        

                                        <fieldset class="mt-2">
                                            <h5>Phone</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="phone" value="<?php echo e($details->phone); ?>">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Email</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="email" class="form-control" aria-describedby="basic-Createon1" name="email" value="<?php echo e($details->email); ?>">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Support Hour</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="support_hour" value="<?php echo e($details->support_hour); ?>">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Facebook Link</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="facebook" value="<?php echo e($details->facebook); ?>">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Youtube Link</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="youtube" value="<?php echo e($details->youtube); ?>">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Instagram</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="instagram" value="<?php echo e($details->instagram); ?>">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>FB Order</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="fb_order" value="<?php echo e($details->fb_order); ?>">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Youtube Order</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="youtube_order" value="<?php echo e($details->youtube_order); ?>">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Insta Order</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="insta_order" value="<?php echo e($details->insta_order); ?>">
                                            </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary mt-2 btn-lg mx-1">Update</button>
                                    </div>
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
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo e(asset('admin_template/app-assets/js/scripts/pages/table-extended.js')); ?>"></script>
    <!-- END: Page JS-->
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <script>
        var loadFavicon = function(event) {
            var output = document.getElementById('favicon');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <script>
        var loadSize = function(event) {
            var output = document.getElementById('size_guide');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\natural_fiber\resources\views/server/company-details/edit.blade.php ENDPATH**/ ?>