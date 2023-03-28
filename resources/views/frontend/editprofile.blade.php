
@extends('frontend.Layouts.main')
@section('main')
<main>
    <div class="nit-card">      
        <aside class="col-md-8">        
                 
                   <div class="profile-card-body">
              
                        
                   <form method="POST" action="{{route('profileUpdate')}}">
                     @csrf                          
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label ><h2>Change Profile</h2></label>
                                </div>
                                <div class="form-group col-md-6">
                                  
                                </div>
                                <div class="form-group col-md-2">
                                    <button type="submit" class="View-Profile-button"><a href="/profile"> View Profile</a></button>
                                </div>
                                @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                            </div>
                          
                            <div class="form-group">
                            <label class="required">First Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Firstname" name="firstname" value="{{ Auth::user()->name}}">
                           
                            </div>
                            <div class="form-group">                              
                                <label class="required">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Latstname" name="lastname" value="{{ Auth::user()->lastname}}" >
                               
                            </div>
                            <div class="form-group">
                              <label class="required">User Name</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="Username" name="name" value="{{ Auth::user()->name}}" >                              
                           </div>
                           <div class="form-group">
                                <label class="required">About me</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="About Your Self" name="about"  value="{{ Auth::user()->about}}" >
                            </div>
                           <div class="form-group">
                                <label class="tin"><img src="{{asset('frontend/images/more/profile.png')}}"></label>
                            </div>
                         <div class="form-group">
                            <input type="file" class="form-control profile-button" id="inputAddress"  name="image" >                                                  
                         </div>
                       
                        <div class="form-group">
                            <label class="required">Gender</label><br>                          
                            <input  type="Radio" name="gender" value="{{ Auth::user()->gender}}" ><label >Male</label>
                            <input type="Radio" name="gender" value="{{ Auth::user()->gender}}"><label >Female </label>                          
                        </div> 
                        <div class="form-group">
                            <label class="required">Email</label>
                            <input class="form-control" placeholder="Email..." type="email" name="email" value="{{ Auth::user()->email}}" >
                            </div> <!-- form-group// -->
                        <div class="form-group">                              
                            <label >Facebook Profile Link</label>
                            <input type="text" class="form-control" id="fblink" placeholder="Facebook..." name="fblink" value="{{ Auth::user()->fblink}}">
                        </div>
                        <div class="form-group">                              
                            <label >Twitter Profile Link</label>
                            <input type="text" class="form-control" id="twlink" placeholder="Twitter..." name="twlink" value="{{ Auth::user()->twlink}}">
                        </div>
                        <div class="form-group">                              
                            <label >Instagram Profile Link</label>
                            <input type="text" class="form-control" id="instalink" placeholder="Instagram..." name="instalink" value="{{ Auth::user()->instalink}}">
                        </div>
                       
                        <div class="form-group">
                          <label >Profile Show</label><br>                        
                          <input type="Radio" name="radio2text" value="public" ><label >Public</label>
                          <input type="Radio" name="radio2text" value="Private"><label >Private </label>                           
                        </div>                     
                       <div class="form-group">
                            <button type="submit" class="change-password-button"><a href="{{route('changepassword')}}"> Change Password</a></button>
                       </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="profile-submit-button"> Save</button>
                            </div>                       
                        </div>                       
                    </form>     
                                
                   </div>
               </div>
             </aside>
 </div>        
            
</main>
@endsection
