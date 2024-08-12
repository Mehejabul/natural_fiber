

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
                    <h5 class="content-header-title float-left pr-1 mb-0">Product Table</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Products
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
                            <h5 class="card-title">Product List</h5>
                            
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li class="ml-2"><a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary">+ Create</a></li>
                                    </ul>
                                </div>
                            
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Product Title</th>
                                                <th>Code</th>
                                                <th>Unit</th>
                                                <th>Category</th>
                                                <th>Catalogue</th>
                                                <th>Brand</th>
                                                <th>Cost Price</th>
                                                <th>MRP Price</th>
                                                <th>Has Stock</th>
                                                <th>Alert Stock</th>
                                                <th>View Section</th>
                                                <th>Photo</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($products): ?>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>
                                                            <div class="dropdown">
                                                                <span
                                                                    class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    
                                                                    <a class="dropdown-item"
                                                                       href="<?php echo e(route('product.edit', $product->id)); ?>"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    
                                                                    
                                                                    <form
                                                                        action="<?php echo e(route('product.destroy', $product->id)); ?>"
                                                                        method="post"> <?php echo csrf_field(); ?> <?php echo method_field('Delete'); ?>
                                                                        <button type="submit" class="dropdown-item"><i class="bx bx-trash mr-1"></i>delete</button>
                                                                    </form>
                                                                    



                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="text-bold-600 text-primary"><?php echo e(ucwords($product->title)); ?></td>
                                                        <td><?php echo e($product->code); ?></td>
                                                        <td><?php echo e($product->unit->title); ?></td>
                                                        <td><?php if($product->category): ?>
                                                            <?php echo e($product->category->name); ?>

                                                        <?php endif; ?></td>
                                                        <td><?php if($product->catalogue): ?>
                                                            <?php echo e($product->catalogue->name); ?>

                                                        <?php endif; ?></td>
                                                        <td><?php if($product->brand): ?>
                                                            <?php echo e($product->brand->name); ?>

                                                        <?php endif; ?></td>
                                                        <td><?php echo e($product->cost); ?></td>
                                                        <td><?php echo e($product->mrp); ?></td>
                                                        <td><?php echo e($product->has_stock); ?></td>
                                                        <td class="text-danger"><?php echo e($product->alert_stock); ?></td>
                                                        <td><?php if($product->viewSection): ?>
                                                            <?php echo e($product->viewSection->title); ?>

                                                        <?php endif; ?></td>
                                                        <td><?php if($product->image): ?>

                                                            <img src="<?php echo e(asset('images/product_image/' . $product->image)); ?>"
                                                                class="mr-50" alt="logo" height="25" width="35"><?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if($product->status == 'Active'): ?>
                                                                <a class="updateProductStatus"
                                                                    id="product-<?php echo e($product->id); ?>"
                                                                    product_id="<?php echo e($product->id); ?>"
                                                                    href="javascript:void(0)">
                                                                    <label class="badge badge-success"
                                                                        status="Active">Active</label>
                                                                </a>
                                                            <?php else: ?>
                                                                <a class="updateProductStatus"
                                                                    id="product-<?php echo e($product->id); ?>"
                                                                    product_id="<?php echo e($product->id); ?>"
                                                                    href="javascript:void(0)">
                                                                    <label class="badge badge-danger"
                                                                        status="Inactive">Inactive</label>
                                                                </a>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             <?php else: ?>
                                                <?php echo e('No Data Found'); ?>

                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Action</th>
                                                <th>Product Title</th>
                                                <th>Code</th>
                                                <th>Unit</th>
                                                <th>Category</th>
                                                <th>Catalogue</th>
                                                <th>Brand</th>
                                                <th>Cost Price</th>
                                                <th>MRP Price</th>
                                                <th>Has Stock</th>
                                                <th>Alert Stock</th>
                                                <th>View Section</th>
                                                <th>Photo</th>
                                                <th>Status</th>

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
    <script>
        $(document).ready(function() {
            $(document).on("click", ".updateProductStatus", function() {
                var status = $(this).children("label").attr("status");
                var product_id = $(this).attr("product_id");

                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    type: "post",
                    url: "<?php echo e(route('updateProductStatus')); ?>",
                    data: {
                        status: status,
                        product_id: product_id
                    },
                    success: function(resp) {
                        if (resp["status"] == 'Inactive') {
                            $("#product-" + product_id).html(
                                "<label class='badge badge-danger' status='Inactive'>Inactive</label>"
                            );
                        } else if (resp["status"] == 'Active') {
                            $("#product-" + product_id).html(
                                "<label class='badge badge-success' status='Active'>Active</label>"
                            );
                        }
                    },
                    error: function() {
                        alert("Error");
                    },
                });
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\natural_fiber\resources\views/server/product/index.blade.php ENDPATH**/ ?>