@extends('frontend.Layouts.main')
@section('main')
    <div class="nit-card">
      
             <aside class="col-md-5">        
                 <div class="card">
                   <div class="card-body">
                                
                         <h4 class="card-title mb-4 mt-2"><img src="{{('frontend/images/icons/my_account.png')}}"></h4>
                         <h2>Login in Your Account</h2>
                      <form>
                             <div class="form-group">
                             <label class="required">Email</label>
                             <input name="" class="form-control text" placeholder="Email" type="email">
                             </div> <!-- form-group// -->
                             <div class="form-group">
                         
                             <label class="required">Password</label>
                             <input class="form-control" placeholder="Enter Password" type="password">
                             </div> <!-- form-group// -->
                             <div class="form-group">
                             <div class="checkbox">
                             <label> <a href="">Forgot password</a> </label>   <div class="float-right ">Don't have an account  <a class="float-right" href="{{('/signup')}}">  Sign Up</a></div> 
                             </div>
                          <!-- form-group// -->
                             <div class="form-group">
                             <button type="submit" class="btn btn-primary btn-block"> SIGN IN </button>
                             <h4 class="card-title mb-4 mt-2">Or Connect With Social Media</h5>
                             <h4 class="card-title mb-4 mt-2"><img src="{{('frontend/images/icons/fb_icon.png')}}" height="88" width="88"></h4>
                           
                             </div> 
                        <!-- form-group// -->
                      </form>
                                
                   </div>
               </div>
             </aside>
            
                 
         </div>      
          
     </div>
  
    </div>
@endsection