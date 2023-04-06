<?php $__env->startSection('main'); ?>
    <div class="nit-card">
        <aside class="col-md-8">

            <div class="profile-card-body">

                 <a href="<?php echo e(route('editprofile')); ?>"><i class="fas fa-edit" placeholder="edit_profile"></i></a>

                <div class="row">
                    <div class="col-md-3">
                        <label><a href=""><img src="https://via.placeholder.com/200" style="border-radius:10px;"></a></label>
                    </div>
                    <div class=" col-md-6">
                        <h6><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->lastname); ?></h6>
                        <h7> <b>About me</b></h7>
                        <p> <?php echo e(Auth::user()->about); ?></p>
                        <h7><b>Gender - </b><?php echo e(Auth::user()->gender); ?></h7><br/>
                        <h7><b>Email  -    </b><?php echo e(Auth::user()->email); ?></h7>  
                        </div>   
                        <div class="col-md-3">
                            <?php if(!empty(Auth::user()->fblink)): ?>
                            <a href= "<?php echo e(Auth::user()->fblink); ?> " target="blank" class="fab fa-facebook" style="font-size:20px;"></a>
                            <?php endif; ?>
                            <?php if(!empty(Auth::user()->twlink)): ?>
                            <a href="<?php echo e(Auth::user()->twlink); ?>" target="blank" class="fab fa-twitter" style="font-size:20px;"></a>
                            <?php endif; ?>
                            <?php if(!empty(Auth::user()->instalink)): ?>
                            <a href="<?php echo e(Auth::user()->instalink); ?>" target="blank" class="fab fa-instagram" style="font-size:20px;"></a>
                            <?php endif; ?>                                        
                        </div>                                 
                    </div>
               <!-- start slider-->

               <div class="nit-related gGame">
                <h6 style="color:#328bdb; padding:10px" >Last Played Games</h6>
                <div class="owl-carousel lastPlayed-carousel owl-theme">
                    <?php $__currentLoopData = $recentPlayGames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <a href="<?php echo e(route('game-detail', ['gameId' => $game->game_id])); ?>"><img src="<?php echo e(asset($game->game_thumb)); ?>" alt=""><figcaption><?php echo e($game->shortName()); ?></figcaption></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
               

               <h6 style="color:rgb(240, 199, 20); padding:10px"">Favorite Games</h6>
               <div class="owl-carousel fvt-carousel owl-theme">
                    <?php $__currentLoopData = $favoriteGames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <a href="<?php echo e(route('game-detail', ['gameId' => $game->game_id])); ?>"><img src="<?php echo e(asset($game->game_thumb)); ?>" alt=""><figcaption><?php echo e($game->shortName()); ?></figcaption></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
           </div>

           <!-- end slider-->
            </div>
        </aside>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/frontend/profile.blade.php ENDPATH**/ ?>