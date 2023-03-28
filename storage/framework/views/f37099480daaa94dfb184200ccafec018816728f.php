<?php
$categories = App\Models\Category::orderBy('category_id','DESC')->get();
?>
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><a href="#"><?php echo e(($category)-> name); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\feenu\resources\views/frontend/Layouts/categories.blade.php ENDPATH**/ ?>