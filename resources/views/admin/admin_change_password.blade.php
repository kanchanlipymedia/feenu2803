@extends('layouts.app')

@section('title') @if(empty($about)) Add @else Edit @endif About @stop

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-full">

    <!-- Main content -->
    <section class="content">
      
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Change password</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                    
                        <form method="post" action="{{ route('admin.update.password') }}">
                            @csrf    
                            <div class="row">
                       
                            <div class="col-12">						
                            
                                <div class="row">
                                    
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <h5>Current Password <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" id="current_password" name="oldpassword" class="form-control" required=""></div>
                                        </div>

                                        <div class="form-group">
                                            <h5>New Password <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" id="password" name="password" class="form-control" required=""></div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Confirm Password <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required=""></div>
                                        </div>

                                    </div>  <!-- end cold md 6 -->

                                </div>  <!-- end row -->
                          
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
                                </div>

                            </div>
                
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    </section>
    <!-- /.content -->
</div>

@endsection