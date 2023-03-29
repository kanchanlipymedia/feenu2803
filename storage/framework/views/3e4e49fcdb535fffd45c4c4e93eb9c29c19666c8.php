<?php $__env->startSection('main'); ?>
<div class="nit-card">
<aside class="col-md-5">
    <div class="card">
        <div class="card-body">

          
            <h2>Reset Password</h2>
             <?php if(session('status')): ?>
               <div class="mb-4 font-medium text-sm text-green-600">
                     <?php echo e(session('status')); ?>

                 </div>
                 <?php endif; ?>
                 <form method="POST" action="<?php echo e(route('password.update')); ?>">
                 <?php echo csrf_field(); ?>
                 <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">
                <div class="form-group">
                     <label class="required">Email</label>
                     <input type="email"  class="form-control" name="email" :value="old('email', $request->email)" required autofocus >
                     <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback d-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                     <label class="required">password</label>
                     <input type="password" class="form-control" name="password" :value="__('Password')"" required autofocus >
                   
                </div>
                <div class="form-group">
                     <label class="required">Confirm Password</label>
                     <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" :value="old('email', $request->email)" required autofocus >
                     <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback d-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>        

                   
                     <div class="form-group">                          
        
                    <button type="submit" class="btn btn-primary btn-block">   <?php echo e(__('Reset Password')); ?></button>
                     <!--<h4 class="card-title mb-4 mt-2">Or Connect With Social Media</h5>
                     <h4 class="card-title mb-4 mt-2"><img src="<?php echo e(('frontend/images/icons/fb_icon.png')); ?>" height="88" width="88"></h4>-->

                     </div> <!-- form-group// -->
              </form>
        </div>
    </div>             
</aside>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/auth/reset-password.blade.php ENDPATH**/ ?>