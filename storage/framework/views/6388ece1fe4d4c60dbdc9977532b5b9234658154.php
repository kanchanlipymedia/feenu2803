<?php $__env->startSection('main'); ?>
    <div class="nit-card">
      
             <aside class="col-md-5">        
                 <div class="card">
                   <div class="card-body">
                
                         <h4 class="card-title mt-2"><img src="<?php echo e(('frontend/images/icons/my_account.png')); ?>"></h4>
                         <h2>Change Password</h2>
                         <?php if(session('status')): ?>
                            <div class="mb-4 font-medium text-sm text-green-600">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                    <form action="<?php echo e(route('update-password')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                         
                         <label class="required">Current Password</label>
                                    
                             <input name="old_password" type="password" class="form-control <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="oldPasswordInput"
                                 placeholder="Old Password">
                             <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <span class="text-danger"><?php echo e($message); ?></span>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div> <!-- form-group// -->
                          <div class="form-group">                      
                                <label for="newPasswordInput" class="form-label required">New Password</label>
                                    <input name="new_password" type="password" class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="newPasswordInput"
                                        placeholder="New Password">
                                    <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div> <!-- form-group// -->
                          <div class="form-group">
                      
                             <label class="required">Confirm Password</label>
                            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                 placeholder="Confirm New Password">
                           
                          </div> <!-- form-group// -->
                          <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block"> Save </button>
                        </div> <!-- form-group// -->
                   
                    </form>
                                
                   </div>
               </div>
             </aside>
            
                 
         </div>      
          
     </div>
  
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/frontend/changepassword.blade.php ENDPATH**/ ?>