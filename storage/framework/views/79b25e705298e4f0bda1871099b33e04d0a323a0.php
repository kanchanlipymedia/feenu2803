<?php
$games = App\Models\Game::orderBy('game_id','DESC')->get();

?>

<?php $__env->startSection('main'); ?>
    <div class="container">
     <div class="nit-more-menu">
         <ul>
             <li><a href="<?php echo e(url('/most-played')); ?>"> most played</a></li>
             <li><a href="<?php echo e(url('/most-recommend')); ?>">most recommended </a></li>
             <li><a href="<?php echo e(url('/new-game')); ?>">NEW</a></li>
         </ul>
     </div>
     <div class="nit-content">
        <ul>
         <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
         
             
             <li ><a href="<?php echo e(url('/game')); ?>"><img src="<?php echo e(asset($game-> GameThumb)); ?>"  width="75"><figcaption><?php echo e(($game)-> name); ?></figcaption></a></li>
           
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </ul>
     </div>
     <div class="nit-loader">
         <div class="spinner-border"></div>
     </div>
     </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\feenu3023\resources\views/frontend/index.blade.php ENDPATH**/ ?>