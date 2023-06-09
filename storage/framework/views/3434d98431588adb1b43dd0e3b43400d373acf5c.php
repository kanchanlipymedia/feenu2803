<?php $__env->startSection('main'); ?>
    <div class="nit-card">

             <aside class="col-md-5">
                 <div class="card">
                   <div class="card-body">

                         <h4 class="card-title mb-4 mt-2"><img src="<?php echo e(('frontend/images/icons/my_account.png')); ?>"></h4>
                         <h2>Login in Your Account</h2>
                         <?php if(session('status')): ?>
                         <div class="mb-4 font-medium text-sm text-green-600">
                             <?php echo e(session('status')); ?>

                         </div>
                     <?php endif; ?>
                         <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="user_type" value="2">
                             <div class="form-group">
                             <label class="required">Email</label>
                             <input  id="email" name="email" class="form-control text" placeholder="Email" type="email" required autofocus >
                             <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback d-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div> <!-- form-group// -->
                             <div class="form-group">
                             <label class="required">Password</label>
                             <input class="form-control" id="password" placeholder="Enter Password" type="password"  name="password" required autocomplete="current-password">
                             <?php if($errors->has('password')): ?>
                                <span class="invalid-feedback d-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div> <!-- form-group// -->
                             <div class="form-group">
                             <div class="checkbox">

                                <?php if(Route::has('password.request')): ?>
                             <label> <a class="forgota"  href="<?php echo e(route('password.request')); ?>">Forgot password</a> </label>
                             <?php endif; ?>
                              <div class="float-right ">Don't have an account<a class=" forgota" href="<?php echo e(('/register')); ?>"> <b>Sign Up</b></a></div>
                             </div>
                             </div> <!-- form-group// -->
                             <div class="form-group">
                             <button type="submit" class="but btn btn-primary btn-block"><?php echo e(__('SIGN IN ')); ?></button>
                             <!-- <h4 class="card-title mb-4 mt-2">Or Connect With Social Media</h5>
                             <h4 class="card-title mb-4 mt-2"><img src="<?php echo e(('frontend/images/icons/fb_icon.png')); ?>" height="88" width="88"></h4> -->

                             </div> <!-- form-group// -->
                      </form>

                   </div>
               </div>
             </aside>


         </div>

     </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/auth/login.blade.php ENDPATH**/ ?>