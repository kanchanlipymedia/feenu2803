<?php
$privacys =App\Models\Privacy::orderBy('id','DESC')->get();
?>

<?php $__env->startSection('main'); ?>
    <div class="nit-card">      
        <aside class="col-md-12">        
            <div class="card">
                <?php $__currentLoopData = $privacys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $privacy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-body">
                    
                        <h1><?php echo e(($privacy)-> title); ?></h1>
                        
                <div>
                <div>
                    <?php echo e(($privacy)-> Description); ?>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
            </div>
        </aside>
 </div>        
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\feenu4\resources\views/frontend/privacy.blade.php ENDPATH**/ ?>