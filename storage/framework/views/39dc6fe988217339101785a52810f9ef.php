

<?php $__env->startSection('css'); ?>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/vendors.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css')); ?>">
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
    <style>
        a label{
            cursor: pointer;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Add rows table -->
                <section id="add-row">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Gallery List</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                        </p>
                                        <a href=<?php echo e(route('gallery.create')); ?> class="btn btn-primary mb-2  align-items-center"> Create
                                            </a>
                                        
                                        <div class="table-responsive">
                                            <table class="table add-rows">
                                                <thead>
                                                    <tr>
                                                      
                                                        <th>Title</th>
                                                        <th>Name</th>
                                                        <th>Image</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                   
                                                        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                                    <tr>
                                                        
                                                        <th>
                                                           <?php echo e($gallery -> title); ?>

                                                         
                                                        </th>
                                                        <th>
                                                           <?php echo e($gallery -> name); ?>

                                                         
                                                        </th>
                                                          
                                                        <th>
                                                             <img src="<?php echo e(asset('images/gallery/'.$gallery->image)); ?>" id="output" alt="img" width="100px" height="auto" class="mt-2 mx-1">
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                         <td>
                                                            <div class="dropdown">
                                                             <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                
                                                                <a href="<?php echo e(route('gallery.edit', $gallery->id)); ?>" class="dropdown-item">
                                                                        <i class="bx bx-edit-alt mr-1"></i> Edit
                                                                </a>
                                                             

                                                             
                                                                    <form action="<?php echo e(route('gallery.destroy',$gallery->id)); ?>" method="post"> <?php echo csrf_field(); ?> <?php echo method_field('Delete'); ?>
                                                                        <button type="submit" class="dropdown-item"><i class="bx bx-trash mr-1"></i> delete</button>
                                                                    </form> 
                                                                    
                                                                </div>
                                                            </div>
                                                         </td>
                                                       
                                                    </tr>
                                              

                                            </tbody>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <tfoot>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Name</th>
                                                        <th>Image</th>
                                                        <th></th>
                                                        <th></th>
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
                <!--/ Add rows table -->     

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
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')); ?>"></script>
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


<?php echo $__env->make('server.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\natural_fiber\resources\views/server/gallery/index.blade.php ENDPATH**/ ?>