@extends('frontend.Layouts.main')
@section('main')
   <div class="nit-card">      
        <aside class="col-md-5">        
                 <div class="card">
                   <div class="card-body">
                                
                    <h4 ><img src="{{url('frontend/images/icons/Message.png')}}"></h4>
                    <h2 >Contact Us</h2>
                    <h3>For any quation of feedback use the form below or you can reach us at</h3>
                    <h4 style="font-weight:bold;" >Support [At] Feenu [dot] com</h4>
                    @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                          {{ csrf_field() }}
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="firstname" class="required">First Name</label>
                              <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                              @if ($errors->has('name'))
                                  <span class="text-danger">{{ $errors->first('name') }}</span>
                              @endif
                            </div>
                  
                            <div class="form-group">
                              <label class="required">Email</label>
                              <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                              @if ($errors->has('email'))
                                  <span class="text-danger">{{ $errors->first('email') }}</span>
                              @endif
                              </div> <!-- form-group// -->
                          </div>
                          <div class="form-group">
                            <label for="subject" class="required">Subject</label>
                      
                            <select name="subject" value="{{ old('subject') }}" class="form-control">
                                <option value="feedback">feedback</option>
                                <option value="option2">option2</option>
                                <option value="option3">option3</option>
                                <option value="option4">option4</option>
                            </select>                           
                            @if ($errors->has('subject'))
                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                            @endif
                          </div>
                         
                     
                       <div class="form-group">
                       <label class="required">Message</label>
                       <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                       @if ($errors->has('message'))
                           <span class="text-danger">{{ $errors->first('message') }}</span>
                       @endif
                       </div> <!-- form-group// -->
                     
                       <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block"> SUBMIT </button>
                      </form>
                                
                   </div>
               </div>
             </aside>
 </div> 
 @endsection       
            
