<?php echo $__env->make('client.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--Offcanvas menu area start-->
<?php echo $__env->make('client.layouts.secondary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- secondary header end -->

<section class="about_page_section">
    <div class="container">
        <div class="about_page_title">
            <h2>Gallery</h2>
        </div>
        <div class="gallery_wrap">
            <div class="row">
                <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="gal_content">
                        <div class="gallery_item">
                            <img src="<?php echo e(asset('images/gallery/' . $gallery -> image)); ?>" alt=""
                                class="img-fluid w-100">
                            <div class="gal_overlay">
                                <h5><?php echo e($gallery -> title); ?></h5>
                                <p><?php echo e($gallery -> name); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('client.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH G:\natural_fiber\resources\views/client/gallery.blade.php ENDPATH**/ ?>