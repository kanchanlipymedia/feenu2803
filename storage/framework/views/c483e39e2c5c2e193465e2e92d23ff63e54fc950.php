<?php
$abouts =App\Models\About::orderBy('id','DESC')->get();
?>

<?php $__env->startSection('main'); ?>
    <div class="nit-card">      
        <aside class="col-md-12">        
            <div class="card">
                <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-body">
                    
                        <h1><?php echo e(($about)-> title); ?></h1>
                        
                <div>
                <div>
                    <?php echo e(($about)-> Description); ?>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
            </div>
        </aside>
 </div>        
            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\feenu0323\resources\views/frontend/about.blade.php ENDPATH**/ ?>