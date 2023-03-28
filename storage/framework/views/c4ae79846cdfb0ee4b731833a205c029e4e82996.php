<?php $__env->startSection('main'); ?>
   <div class="nit-card">      
        <aside class="col-md-5">        
                 <div class="card">
                   <div class="card-body">
                                
                    <h4 ><img src="<?php echo e(url('frontend/images/icons/Message.png')); ?>"></h4>
                    <h2 >Contact Us</h2>
                    <h3>For any quation of feedback use the form below or you can reach us at</h3>
                    <h2 >Support@Feenu.com</h2>
                    <?php if(Session::has('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                        <form method="POST" action="<?php echo e(route('contact.us.store')); ?>" id="contactUSForm">
                          <?php echo e(csrf_field()); ?>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="firstname" class="required">First Name</label>
                              <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e(old('name')); ?>">
                              <?php if($errors->has('name')): ?>
                                  <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                              <?php endif; ?>
                            </div>
                            <input type="hidden" name="phone"  placeholder="Phone" value="9540859838">
                            <div class="form-group">
                              <label class="required">Email</label>
                              <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo e(old('email')); ?>">
                              <?php if($errors->has('email')): ?>
                                  <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                              <?php endif; ?>
                              </div> <!-- form-group// -->
                          </div>
                          <div class="form-group">
                            <label for="subject" class="required">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject" value="<?php echo e(old('subject')); ?>">
                            <?php if($errors->has('subject')): ?>
                                <span class="text-danger"><?php echo e($errors->first('subject')); ?></span>
                            <?php endif; ?>
                          </div>
                         
                     
                       <div class="form-group">
                       <label class="required">Message</label>
                       <textarea name="message" rows="3" class="form-control"><?php echo e(old('message')); ?></textarea>
                       <?php if($errors->has('message')): ?>
                           <span class="text-danger"><?php echo e($errors->first('message')); ?></span>
                       <?php endif; ?>
                       </div> <!-- form-group// -->
                     
                       <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block"> SUBMIT </button>
                      </form>
                                
                   </div>
               </div>
             </aside>
 </div> 
 <?php $__env->stopSection(); ?>       
            

<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\feenu0503\resources\views/frontend/contact.blade.php ENDPATH**/ ?>