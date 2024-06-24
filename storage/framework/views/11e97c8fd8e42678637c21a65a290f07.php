<div class="categories_menu categories_three">
    <div class="categories_title">
        <h2 class="categori_toggle">Catalogue</h2>
    </div>
    <div class="categories_menu_toggle">
        <ul>
            <?php $__currentLoopData = App\Models\Catalogue::with('category')->get()->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(url('shop/catalogue/'.$catalogue->id)); ?>"> <?php echo e($catalogue->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\lifestyle\resources\views/client/layouts/_all_categories.blade.php ENDPATH**/ ?>