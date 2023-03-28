<?php $__env->startSection('main'); ?>
    <div class="nit-card">
      
             <aside class="col-md-5">        
                 <div class="card">
                   <div class="card-body">
                                
                         <h4 class="card-title mb-4 mt-2"><img src="<?php echo e(('frontend/images/icons/my_account.png')); ?>"></h4>
                         <h2>Change Password</h2>
                      <form>
                        <div class="form-group">
                         
                            <label class="required">Current Password</label>
                            <input class="form-control" placeholder="Enter Password" type="password">
                            </div> <!-- form-group// -->
                             <div class="form-group">
                         
                             <label class="required">Password</label>
                             <input class="form-control" placeholder="Enter Password" type="password">
                             </div> <!-- form-group// -->
                             <div class="form-group">
                         
                                <label class="required">Confirm Password</label>
                                <input class="form-control" placeholder="Enter Password" type="password">
                              
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
<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\feenu0323\resources\views/frontend/changepassword.blade.php ENDPATH**/ ?>