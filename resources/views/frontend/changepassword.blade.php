@extends('frontend.Layouts.main')
@section('main')
    <div class="nit-card">
      
             <aside class="col-md-5">        
                 <div class="card">
                   <div class="card-body">
                
                         <h4 class="card-title mt-2"><img src="{{('frontend/images/icons/my_account.png')}}"></h4>
                         <h2>Change Password</h2>
                         @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                    <form action="{{ route('update-password') }}" method="POST">
                        @csrf
                        <div class="form-group">
                         
                         <label class="required">Current Password</label>
                                    
                             <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                 placeholder="Old Password">
                             @error('old_password')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                        </div> <!-- form-group// -->
                          <div class="form-group">                      
                                <label for="newPasswordInput" class="form-label required">New Password</label>
                                    <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                        placeholder="New Password">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
@endsection