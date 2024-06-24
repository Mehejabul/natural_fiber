
    <h5>Select Category Level</h5>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-Createon1"><i class="bx bxs-categories"></i></span>
        </div>
        <select name="parent_id" id="parent_id" class="form-control" required>
            <option value="0"
                <?php if(isset($category['parent_id'])): ?>
                    <?php if($category['parent_id'] == 0): ?>
                        selected
                    <?php endif; ?> 
                <?php endif; ?>>
                Main Category</option>
            <?php if(!empty($getCategories)): ?>
                <?php $__currentLoopData = $getCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item['id']); ?>"
                        <?php if(isset($category['parent_id'])): ?>
                            <?php if($category['parent_id'] == $item['id']): ?>
                                selected
                            <?php endif; ?>
                        <?php endif; ?>>
                        &nbsp;-&gt;&nbsp;<?php echo e($item['name']); ?>

                    </option>
                    <?php if(!empty($item['subcategories'])): ?>
                        <?php $__currentLoopData = $item['subcategories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($subcategory['id']); ?>"
                                <?php if(isset($category)): ?>
                                    <?php if($category['parent_id'] == $subcategory['id']): ?>
                                        selected
                                    <?php endif; ?>
                                <?php endif; ?>>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&raquo;&nbsp;<?php echo e($subcategory['name']); ?></option>
                                <?php if(!empty($subcategory['subcategories'])): ?>
                                    <?php $__currentLoopData = $subcategory['subcategories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($sub_subcategory['id']); ?>"
                                            <?php if(isset($category)): ?>
                                                <?php if($category['parent_id'] == $sub_subcategory['id']): ?>
                                                    selected
                                                <?php endif; ?>
                                            <?php endif; ?>>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&raquo;&nbsp;<?php echo e($sub_subcategory['name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <?php echo e('Create Category First'); ?>


            <?php endif; ?>

        </select>
    </div>
<?php /**PATH C:\xampp\htdocs\client_lifestyle\resources\views/server/category/append_categories_level.blade.php ENDPATH**/ ?>