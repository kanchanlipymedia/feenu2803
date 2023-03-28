<?php $__env->startSection('main'); ?>
<div class="nit-card">
    <aside class="col-md-8">

        <div class="profile-card-body">
            <div class="row">
                <div class="col-md-4">
                    <label><a href="https://placeholder.com"><img src="https://via.placeholder.com/200"></a></label>
                </div>
                <div class=" col-md-8">
                    <h6><?php echo e($user->name); ?> <?php echo e($user->lastname); ?></h6>
                    <h6> <b>About me</b></h6>
                    <p> <?php echo e($user->about); ?></p>
                    <h6><b>Gender - </b><?php echo e($user->gender); ?></h6><br />
                    <h6><b>Email - </b><?php echo e($user->email); ?></h6>
                </div>
            </div>
            <!-- start slider-->

            <div class="nit-related gGame">

                <h6 style="color:rgb(240, 199, 20)">Favorite Games</h6>
                <div class="owl-carousel fvt-carousel owl-theme">
                    <?php $__currentLoopData = $favoriteGames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <a href="<?php echo e(route('game-detail', ['gameId' => $game->game_id])); ?>">
                            <img src="<?php echo e(asset($game->game_thumb)); ?>" alt="<?php echo e($game->shortName()); ?>">
                            <figcaption><?php echo e($game->shortName()); ?></figcaption>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- end slider-->
        </div>
    </aside>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\feenu2403\resources\views/frontend/user-profile.blade.php ENDPATH**/ ?>