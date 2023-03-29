
@extends('frontend.Layouts.main')
@section('main')

    <div class="nit-card">

             <aside class="col-md-5">
                 <div class="card">
                   <div class="card-body">

                         <h4 class="card-title mb-4 mt-2"><img src="{{('frontend/images/icons/my_account.png')}}"></h4>
                         <h2>Forget Password</h2>
                         @if (session('status'))
                         <div class="mb-4 font-medium text-sm text-green-600">
                             {{ session('status') }}
                         </div>
                         @endif
                         <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                           
                        <div class="form-group">
                             <label class="required">Email</label>
                             <input  id="email" name="email" class="form-control text" placeholder="Email" type="email"  :value ="old('email')"required autofocus >
                             @if ($errors->has('email'))
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                             <div class="form-group">                          
                                <button type="submit" class="btn btn-primary btn-block"> {{ __('Email Password Reset Link') }}</button>
                             <!--<h4 class="card-title mb-4 mt-2">Or Connect With Social Media</h5>
                             <h4 class="card-title mb-4 mt-2"><img src="{{('frontend/images/icons/fb_icon.png')}}" height="88" width="88"></h4>-->

                             </div> <!-- form-group// -->
                      </form>

                   </div>
             
             </aside>
</div>
@endsection

