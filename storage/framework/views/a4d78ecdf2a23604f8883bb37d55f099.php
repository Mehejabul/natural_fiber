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

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable_inline{
            height: 100px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Product Create</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('product.index')); ?>">Products</a>
                        </li>
                        <li class="breadcrumb-item active">Product Create
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
                        <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data"> <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <fieldset >
                                            <h5>Product Title <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="e.g:Kids Premium Water Bottle Sweet Pink" aria-describedby="basic-Createon1" name="title" required>
                                            </div>
                                        </fieldset>

                                        <fieldset class="mt-2">
                                            <h5>Product Code <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Type Product Model" aria-describedby="basic-Createon1" name="code" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Product Color <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Type Product Color" aria-describedby="basic-Createon1" name="color" >
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Weight</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="e.g:100" aria-describedby="basic-Createon1" name="weight">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Unit <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-purchase-tag-alt"></i></span>
                                                </div>
                                                <select name="unit_id" id="" class="form-control" required>
                                                    <option value="">----select unit-----</option>
                                                    <?php if($units): ?>
                                                        <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($unit->id); ?>"><?php echo e($unit->title); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Category <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bxs-categories"></i></span>
                                                </div>
                                                <select name="category_id" id="category_id" class="form-control" required>
                                                    <option value="">----select category-----</option>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <optgroup label="<?php echo e($catalogue['name']); ?>"></optgroup>
                                                        <?php $__currentLoopData = $catalogue['category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($category['id']); ?>">&nbsp;&nbsp;&nbsp;--&nbsp;<?php echo e($category['name']); ?></option>
                                                            <?php $__currentLoopData = $category['subcategories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($subcategories['id']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;<?php echo e($subcategories['name']); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Brand <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bxl-slack"></i></span>
                                                </div>
                                                <select name="brand_id" id="" class="form-control" required>
                                                    <option value="">----select brand----</option>
                                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($brand['id']); ?>"><?php echo e($brand['name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Has Stock <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-purchase-tag-alt"></i></span>
                                                </div>
                                                <select name="has_stock" id="" class="form-control" required>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <!--<fieldset class="mt-2">-->
                                        <!--    <h5>Discount Type</h5>-->
                                        <!--    <div class="input-group">-->
                                        <!--        <div class="input-group-prepend">-->
                                        <!--            <span class="input-group-text" id="basic-Createon1"><i class="bx bx-purchase-tag-alt"></i></span>-->
                                        <!--        </div>-->
                                        <!--        <select name="discount_type" id="" class="form-control">-->
                                        <!--            <option value="Not_Apply">Not Apply</option>-->
                                        <!--            <option value="Fixed">Fixed</option>-->
                                        <!--            <option value="Percentage">Percentage</option>-->
                                        <!--        </select>-->
                                        <!--    </div>-->
                                        <!--</fieldset>-->
                                        <fieldset class="mt-2">
                                            <h5>Discount Amount</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="e.g: 100 Blank if no discount" aria-describedby="basic-Createon1" name="discount_amount">
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Cost/Purchase Price <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="100" aria-describedby="basic-Createon1" name="cost" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>MRP Price <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="150" aria-describedby="basic-Createon1" name="mrp" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Stock Size <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="100" aria-describedby="basic-Createon1" name="stock" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Alert Stock <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-barcode"></i></span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="25" aria-describedby="basic-Createon1" name="alert_stock" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>Product Type <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-purchase-tag-alt"></i></span>
                                                </div>
                                                <select name="type" id="" class="form-control" required>
                                                    <option value="0">Not Select</option>
                                                    <?php if($product_types): ?>
                                                        <?php $__currentLoopData = $product_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($product_type->id); ?>"><?php echo e($product_type->title); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="mt-2">
                                            <h5>View Section <span class="text-danger">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-purchase-tag-alt"></i></span>
                                                </div>
                                                <select name="view_section" id="" class="form-control" required>
                                                    <option value="">---Select View Section---</option>
                                                    <?php if($product_views): ?>
                                                        <?php $__currentLoopData = $product_views; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($view->id); ?>"><?php echo e($view->title); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </fieldset>
                                        
                                        <fieldset class="mt-2">
                                            <h5>Product Description <span class="star">*</span></h5>
                                            <textarea name="details_description" id="description"></textarea>
                                        </fieldset>
                                       


                                        <fieldset class="mt-2">
                                            <h5>Image</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-image"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="image" id="image" onchange="loadFile(event)">
                                            </div>
                                        </fieldset>
                                        <img id="output" class="mt-2">
                                        <fieldset class="mt-2">
                                            <h5>Size Guide</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-image"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="size_guide" id="size_guide" onchange="loadGuide(event)">
                                            </div>
                                        </fieldset>
                                        <img id="guide" class="mt-2">

                                        <fieldset class="mt-2">
                                            <h5>Multi Image</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-image"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="multiImage[]" id="multiImage" multiple>
                                            </div>
                                        </fieldset>

                                        <button type="submit" class="btn btn-primary mt-2 btn-lg mx-1">Create</button>
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
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.height = 300;
        }
    </script>
    <script>
        var loadGuide = function(event) {
            var output = document.getElementById('guide');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.height = 300;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/abrarmart.com/resources/views/server/product/create.blade.php ENDPATH**/ ?>