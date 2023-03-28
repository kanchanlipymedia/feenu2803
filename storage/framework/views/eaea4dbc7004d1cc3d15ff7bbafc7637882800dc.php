<?php $__env->startSection('main'); ?>
<div class="container">
        <div class="nit-more-menu">
            <div class="container">
                <ul>
                    <li><a href="<?php echo e(url('/most-played')); ?>"> most played</a></li>
                    <li><a href="<?php echo e(url('/most-recommend')); ?>">most recommended </a></li>
                    <li><a href="<?php echo e(route('newgame')); ?>">NEW</a></li>
                </ul>
             </div>
         </div>
        <div class="nit-content-new">
            <ul>
                <?php $__currentLoopData = $newGames1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newGame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="newGame"><a href="<?php echo e(route('game-detail', ['gameId' => $newGame->game_id])); ?>"><img
                                        src="<?php echo e(asset($newGame->game_thumb)); ?>" alt="">
                                    <figcaption><?php echo e($newGame->shortName()); ?></figcaption>
                                </a>
                            </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
              </ul>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\feenu4\resources\views/frontend/new-game.blade.php ENDPATH**/ ?>