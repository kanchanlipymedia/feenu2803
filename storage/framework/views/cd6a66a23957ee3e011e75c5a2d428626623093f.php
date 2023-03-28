        
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->startSection('main'); ?>
    <div class="nit-card">      
        <aside class="col-md-5">        
                 <div class="card">
                   <div class="card-body">
                                
                         <h4 ><img src="<?php echo e(url('frontend/images/icons/signup.png')); ?>"></h4>
                         <h2 >Sign Up and Create Your Account</h2>
                         <form method="POST" action="<?php echo e(route('register')); ?>">
                         <?php echo csrf_field(); ?>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label class="required">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Firstname">
                              </div>
                              <div class="form-group col-md-6">
                                <label class="required">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Latstname">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="required">User Name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label class="required">Gender</label><br>
                          
                                <input type="Radio" name="gender" value="Male" required><label >Male</label>
                                 <input type="Radio" name="gender" value="Female">    <label >Female </label>
                                 
                            
                        </div> 
                        <div class="form-group">
                        <label class="required">Email</label>
                        <input name="email" class="form-control" placeholder="Email" type="email">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                         <label class="required">Password</label>
                        <input class="form-control" placeholder="Enter Password"  type="password"
                                name="password"
                                required autocomplete="new-password" >
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label class="required">Confirm Password</label>
                           <input class="form-control" placeholder="Enter Confirm Password" type="password"
                                name="password_confirmation" required >
                       </div> <!-- form-group// -->
                       
                        <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                               I have read the privacy policy and cookie policy
                              </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> <?php echo e(__('Register')); ?> </button>
                        <h4>Or Connect With Social Media</h4>
                        <h4 class="card-title mb-4 mt-2"><img src="<?php echo e(url('frontend/images/icons/fb_icon.png')); ?>"></h4>
                      
                        </div> <!-- form-group// -->
                        </form>
                                
                   </div>
               </div>
             </aside>
 </div>        
 <?php $__env->stopSection(); ?>           



     

       
<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\feenu4\resources\views/auth/register.blade.php ENDPATH**/ ?>