
@extends('frontend.Layouts.main')
@section('main')
<div class="nit-card">
<aside class="col-md-5">
    <div class="card">
        <div class="card-body">

          
            <h2>Reset Password</h2>
             @if (session('status'))
               <div class="mb-4 font-medium text-sm text-green-600">
                     {{ session('status') }}
                 </div>
                 @endif
                 <form method="POST" action="{{ route('password.update') }}">
                 @csrf
                 <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="form-group">
                     <label class="required">Email</label>
                     <input type="email"  class="form-control" name="email" :value="old('email', $request->email)" required autofocus >
                     @if ($errors->has('email'))
                        <span class="invalid-feedback d-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                     <label class="required">password</label>
                     <input type="password" class="form-control" name="password" :value="__('Password')"" required autofocus >
                   
                </div>
                <div class="form-group">
                     <label class="required">Confirm Password</label>
                     <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" :value="old('email', $request->email)" required autofocus >
                     @if ($errors->has('email'))
                        <span class="invalid-feedback d-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>        

                   
                     <div class="form-group">                          
        
                    <button type="submit" class="btn btn-primary btn-block">   {{ __('Reset Password') }}</button>
                     <!--<h4 class="card-title mb-4 mt-2">Or Connect With Social Media</h5>
                     <h4 class="card-title mb-4 mt-2"><img src="{{('frontend/images/icons/fb_icon.png')}}" height="88" width="88"></h4>-->

                     </div> <!-- form-group// -->
              </form>
        </div>
    </div>             
</aside>
</div>
@endsection

