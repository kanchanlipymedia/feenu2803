
@extends('frontend.Layouts.main')
    
    @section('main')
        <div class="nit-card">      
            <aside class="col-md-5">        
                     <div class="card">
                       <div class="card-body">
                                    
                             <h4 ><img src="{{url('frontend/images/icons/signup.png')}}"></h4>
                             <x-auth-validation-errors class="mb-4" :errors="$errors" />
                             <h2 >Sign Up and Create Your Account</h2>
                             <form method="POST" action="{{ route('register') }}">
                             @csrf
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label class="required">First Name</label>
                                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Firstname" required>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="required">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Latstname" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="required">User Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label class="required">Gender</label><br>
                              
                                    <input type="Radio" name="gender" value="Male" required><label >Male</label>
                                     <input type="Radio" name="gender" value="Female">    <label >Female </label>
                                     
                                
                            </div> 
                            <div class="form-group">
                            <label class="required">Email</label>
                            <input name="email" class="form-control" placeholder="Email" type="email" required>
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
                                  <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                  <label class="form-check-label" for="gridCheck">
                                   I have read the privacy policy and cookie policy
                                  </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <button type="submit" class=" but btn btn-primary btn-block"> {{ __('Register') }} </button>
                            <!-- <h4>Or Connect With Social Media</h4>
                            <h4 class="card-title mb-4 mt-2"><img src="{{url('frontend/images/icons/fb_icon.png')}}"></h4>
                           -->
                            </div> <!-- form-group// -->
                            </form>
                                    
                       </div>
                   </div>
                 </aside>
     </div>        
     @endsection           
    
    
    
         
    
           