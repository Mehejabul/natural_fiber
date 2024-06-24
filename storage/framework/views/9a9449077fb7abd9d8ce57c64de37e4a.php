<div class="categories_menu categories_three <?php echo $__env->yieldContent('homepage'); ?>">
    <div class="categories_title">
        <h2 class="categori_toggle">CATEGORIES</h2>
    </div>
    
    <div class="categories_menu_toggle">
        <ul>
            <?php
                $load = 0;
            ?>
            <?php $__currentLoopData = App\Models\Catalogue::with('category')->where('status','Active')->get()->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="menu_item_children <?php if($key > 9): ?>
                hidden <?php
                    $load = 1
                ?>
            <?php endif; ?>"><a href="<?php echo e(url('shop/catalogue/'.$catalogue->id)); ?>"><?php echo e($catalogue->name); ?>  <?php if(count($catalogue->category)>0): ?> <i class="fa fa-angle-right"></i> <?php endif; ?></a>
                    <?php if(count($catalogue->category)>0): ?>
                    <ul class="categories_mega_menu">
                        <?php $__currentLoopData = $catalogue->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="menu_item_children"><a href="<?php echo e(url('shop/category/'.$category->id)); ?>"><?php echo e($category->name); ?></a>
                            <?php if(count($category->subcategories) > 0): ?>
                            <ul class="categorie_sub_menu">
                                <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(url('shop/category/'.$subcategory->id)); ?>"><?php echo e($subcategory->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            <?php if($load > 0): ?>
            <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\client_lifestyle\resources\views/client/layouts/_all_categories.blade.php ENDPATH**/ ?>