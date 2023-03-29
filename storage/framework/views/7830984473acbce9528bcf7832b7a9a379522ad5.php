 <?php $__env->slot('logo', null, []); ?> 
            <a href="/">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => ['class' => 'w-20 h-20 fill-current text-gray-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-20 h-20 fill-current text-gray-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </a>
        
         <?php $__env->endSlot(); ?>


<?php $__env->startSection('main'); ?>
    <div class="nit-card">

             <aside class="col-md-5">
                 <div class="card">
                   <div class="card-body">

                       
                         <center>   <h4> <img  src="<?php echo e(url('frontend/images/logo/alogo.png')); ?>"></h4><br><h1> Admin Login</h1></center>
                         <?php if(session('status')): ?>
                         <div class="mb-4 font-medium text-sm text-green-600">
                             <?php echo e(session('status')); ?>

                         </div>
                     <?php endif; ?>
                     <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="user_type" value="1">
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
       


<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\feenu2803\resources\views/auth/admin-login.blade.php ENDPATH**/ ?>