<?php $__env->startSection('main'); ?>
    <div class="container">
     <div class="nit-more-menu">
         <ul>
             <li><a href="<?php echo e(url('/most-played')); ?>"> most played</a></li>
             <li><a href="<?php echo e(url('/most-recommend')); ?>">most recommended </a></li>
             <li><a href="<?php echo e(route('new-games')); ?>">NEW</a></li>
         </ul>
     </div>
     <div class="nit-content-new">
        <ul class="games-list">
        

            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li class="game-box"><a href="<?php echo e(route('game-detail',['gameId'=>$game->game_id])); ?>"><img src="<?php echo e(asset($game->game_thumb)); ?>"/><figcaption><?php echo e($game->shortName()); ?></figcaption></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
     </div>
     <div class="nit-loader">
         <div class="spinner-border"></div>
     </div>
     </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/frontend/index.blade.php ENDPATH**/ ?>