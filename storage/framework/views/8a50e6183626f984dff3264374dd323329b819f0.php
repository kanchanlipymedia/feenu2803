<?php
      $users =App\Models\User::where('user_type',2)->orderBy('id','DESC')->get();
?>

<?php $__env->startSection('main'); ?>
    <div class="nit-card">
        <aside class="col-md-8">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="profile-card-body">
             
                 <a href="<?php echo e(route('editprofile')); ?>"><i class="fas fa-edit" placeholder="edit_profile"></i></a>
              
                <div class="row">
                    <div class="col-md-4">
                        <label><a href="https://placeholder.com"><img src="https://via.placeholder.com/200"></a></label>
                    </div>
                 
                    <div class=" col-md-8">
                        <h6><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></h6>
                        <h7> <b>About me</b></h7>
                        <p><?php echo e($user->about); ?></p>
                        <h7><b>Gender - </b> <?php echo e($user->gender); ?></h7><br/>
                        <h7><b>Email  -    </b><?php echo e($user->email); ?></h7>
                        


                    </div>
             

                </div>
               <!-- start slider-->
               
               <div class="nit-related gGame">
                <h6 class="lightBlue">Last Played Games</h6>
           <div class="owl-carousel lastPlayed-carousel owl-theme">
                  <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                     <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                     <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>
                  <div class="item">
                      <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>               
                 
               </div>
       
               <h6 style="color:rgb(240, 199, 20)">Favorite Games</h6>
               <div class="owl-carousel fvt-carousel owl-theme">
                   <div class="item">
                       <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                   <div class="item">
                       <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                     </div>
                      <div class="item">
                       <a href="game.html"><img src="<?php echo e(('frontend/images/more/i1.png')); ?>" alt=""><figcaption>ROAD</figcaption></a>
                    </div>                 
               </div>
           </div>

           <!-- end slider-->
            </div>
        </aside>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\feenu4\resources\views/frontend/profile.blade.php ENDPATH**/ ?>