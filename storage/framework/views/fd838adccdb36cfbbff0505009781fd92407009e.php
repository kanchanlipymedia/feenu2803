
<?php
$categories = App\Model\Category::orderBy('category_id','DESC')->get();
?>
<div class="nit-nav-main">
    <div class="container">
        <div class="nit-navigation">
            <div class="nit-close-btn">
                <span class="nit-close"><i class="fas fa-times"></i></span>
            </div>
            <div class="menu-main-menu-container">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul>
                
                    <li><a href="#"><?php echo e($category->name); ?></a></li>
                   
                </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\feenu\resources\views/frontend/layouts/category.blade.php ENDPATH**/ ?>