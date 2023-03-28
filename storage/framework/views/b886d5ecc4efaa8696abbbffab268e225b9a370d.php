<?php
      $users =App\Models\User::where('user_type',2)->orderBy('id','DESC')->get();
?>

<?php $__env->startSection('main'); ?>
<main>
    <div class="nit-card">      
        <aside class="col-md-8">        
                 
                   <div class="profile-card-body">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    <form method="post" action="#">
                          
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label ><h2>Change Profile</h2></label>
                                </div>
                                <div class="form-group col-md-6">
                                  
                                </div>
                                <div class="form-group col-md-2">
                                    <button type="submit" class="View-Profile-button"><a href="/profile"> View Profile</a></button>
                                </div>
                            </div>
                          
                            <div class="form-group">
                            <label class="required">First Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Firstname" name="firstname" value="<?php echo e('firstname'); ?>">
                           
                            </div>
                            <div class="form-group">                              
                                <label class="required">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Latstname" name="lastname" value="<?php echo e('lastname'); ?>" >
                               
                            </div>
                            <div class="form-group">
                              <label class="required">User Name</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="Username" name="name" value="<?php echo e('name'); ?>" >
                              
                           </div>
                           <div class="form-group">
                            <label class="required">About me</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="About Your Self" name="about"  value="<?php echo e('about'); ?>" >
                         </div>
                           <div class="form-group">
                            <label class="tin"><img src="<?php echo e(asset('frontend/images/more/profile.png')); ?>"></label>
                         
                         </div>
                         <div class="form-group">
                            <input type="text" class="form-control" id="inputAddress"  name="image"   >
                            <button type="file" class="profile-button"> Upload Image</button>
                         
                         </div>
                       
                        <div class="form-group">
                            <label class="required">Gender</label><br>
                          
                                <input type="Radio" name="gender" value="Male" required><label >Male</label>
                                 <input type="Radio" name="gender" value="Female">    <label >Female </label>
                                 
                            
                        </div> 
                        <div class="form-group">
                            <label class="required">Email</label>
                            <input class="form-control" placeholder="Email..." type="email" name="email" value="<?php echo e('email'); ?>" >
                            </div> <!-- form-group// -->
                        <div class="form-group">                              
                            <label >Facebook Profile Link</label>
                            <input type="text" class="form-control" id="fblink" placeholder="Facebook..." name="fblink" value="<?php echo e('fblink'); ?>">
                        </div>
                        <div class="form-group">                              
                            <label >Twitter Profile Link</label>
                            <input type="text" class="form-control" id="twlink" placeholder="Twitter..." name="twlink" value="<?php echo e('twlink'); ?>">
                        </div>
                        <div class="form-group">                              
                            <label >Instagram Profile Link</label>
                            <input type="text" class="form-control" id="instalink" placeholder="Instagram..." name="instalink" value="<?php echo e('instalink'); ?>">
                        </div>
                       
                        <div class="form-group">
                            <label >Profile Show</label><br>
                        
                                <input type="Radio" name="radio2text" value="Male" required><label >Public</label>
                                <input type="Radio" name="radio2text" value="Female">    <label >Private </label>
                            
                        </div>                        
                       
                       
                        <div class="form-group">
                            <button type="submit" class="change-password-button"><a href="<?php echo e(route('changepassword')); ?>"> Change Password</a></button>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="profile-submit-button"> Save</button>
                            </div>
                            <div class="form-group col-md-4">
                              
                            </div>
                            
                        </div>
                       
                    </form>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                   </div>
               </div>
             </aside>
 </div>        
            
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\feenu3023\resources\views/frontend/editprofile.blade.php ENDPATH**/ ?>