<?php $__env->startSection('css'); ?>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/vendors.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/charts/apexcharts.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('admin_template/app-assets/vendors/css/pickers/daterange/daterangepicker.css')); ?>">
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h5 class="content-header-title float-left pr-1 mb-0">Category Edit</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('category.index')); ?>">Categories</a>
                            </li>
                            <li class="breadcrumb-item active">Category Edit
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
                            <form action="<?php echo e(route('category.update', $category['id'])); ?>" method="post"
                                enctype="multipart/form-data"> <?php echo csrf_field(); ?> <?php echo method_field('put'); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <fieldset>
                                                <h5>Category Image</h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i class="bx bx-image"></i></span>
                                                    </div>
                                                    <input type="file" class="form-control" aria-describedby="basic-Createon1" name="image" id="image">
                                                </div>
                                                <?php if($category->image != null): ?>
                                                    <img src="<?php echo e(asset('images/category/'.$category->image)); ?>" alt="logo" width="70px" height="70px" class="mt-2 mx-1">
                                                <?php endif; ?>
                                            </fieldset>
                                            <fieldset class="mt-2">
                                                <h5>Category Name</h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Name"
                                                        aria-describedby="basic-Createon1" name="category_name"
                                                        value="<?php echo e($category->name); ?>" required>
                                                </div>
                                            </fieldset>
                                            <fieldset class="mt-2">
                                                <h5>Select Catalogue</h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bxbx-building"></i></span>
                                                    </div>
                                                    <select name="catalogue_id" id="catalogue_id" class="form-control"
                                                        required>
                                                        <option value="">Select</option>
                                                        <?php $__currentLoopData = $catalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if($category['catalogue_id'] == $catalogue['id']): ?> selected <?php endif; ?>
                                                                value="<?php echo e($catalogue['id']); ?>"><?php echo e($catalogue['name']); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </fieldset>
                                            <div id="appendCategoriesLevel">
                                                <?php echo $__env->make('server.category.append_categories_level', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                            
                                            <fieldset class="mt-2">
                                                <h5>Category Description</h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bxs-spreadsheet"></i></span>
                                                    </div>
                                                    <textarea name="category_description" id="category_description" cols="30" rows="5" class="form-control"
                                                        aria-describedby="basic-Createon1"><?php echo e($category['description']); ?></textarea>
                                                </div>
                                            </fieldset>
                                            <button type="submit"
                                                class="btn btn-primary mt-2 btn-lg mx-1">Update</button>
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
    
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')); ?>">
    </script>
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
        $(document).ready(function() {
            $("#catalogue_id").change(function() {
                var catalogue_id = $(this).val();
                alert(catalogue_id);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "get",
                    url: "<?php echo e(route('appendCategory')); ?>",
                    data: {
                        catalogue_id: catalogue_id
                    },
                    success: function(resp) {
                        alert("done");
                        $("#appendCatagoriesLevel").html(resp);
                    },
                    error: function() {
                        alert("error");
                    },
                });
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/abrarmart.com/resources/views/server/category/edit.blade.php ENDPATH**/ ?>