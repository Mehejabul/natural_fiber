<?php echo $__env->make('client.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--Offcanvas menu area start-->
<?php echo $__env->make('client.layouts.secondary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--Offcanvas menu area end-->
<!-- secondary header start -->

<!-- secondary header end -->

<section class="about_page_section">
    <div class="container">
        <div class="about_page_title">
            <h2>About Us</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="about_page_pera">
                    <p><?php echo $about -> description; ?></p>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('client.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\natural_fiber\resources\views/client/about_us.blade.php ENDPATH**/ ?>