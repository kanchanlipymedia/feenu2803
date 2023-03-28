@extends('frontend.Layouts.main')
@section('main')
    <div class="nit-card">      
        <aside class="col-md-5">        
                 <div class="card">
                   <div class="card-body">
                                
                         <h4 ><img src="{{url('frontend/images/icons/signup.png')}}"></h4>
                         <h2 >Sign Up and Create Your Account</h2>
                         <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label class="required">First Name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Firstname">
                              </div>
                              <div class="form-group col-md-6">
                                <label class="required">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Latstname">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="required">User Name</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label class="required">Gender</label><br>
                          
                                <input type="Radio" name="radio2text" value="Male" required><label >Male</label>
                                 <input type="Radio" name="radio2text" value="Female">    <label >Female </label>
                                 
                            
                        </div> 
                        <div class="form-group">
                        <label class="required">Email</label>
                        <input name="" class="form-control" placeholder="Email" type="email">
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
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                               I have read the privacy policy and cookie policy
                              </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> SUBMIT </button>
                        <h4>Or Connect With Social Media</h4>
                        <h4 class="card-title mb-4 mt-2"><img src="{{url('frontend/images/icons/fb_icon.png')}}"></h4>
                      
                        </div> <!-- form-group// -->
                        </form>
                                
                   </div>
               </div>
             </aside>
 </div>        
 @endsection           
