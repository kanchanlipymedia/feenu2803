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
                        <h1 class="m-0 font-weight-bold text-primary">Edit Profile</h1>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                            @csrf    
                            <div class="row">
                       
                            <div class="col-12">						
                            
                                <div class="row">
                                    
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <h5>Admin User Name<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}"></div>
                                        </div>

                                    </div>  <!-- end cold md 6 -->

                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <h5>Admin Email<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control" required="" value="{{ $editData->email }}"></div>
                                        </div>

                                    </div>  <!-- end cold md 6 -->

                                </div>  <!-- end row -->

                            
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Profile Image<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="user_image" class="form-control" required="" id="image"> </div>
                                        </div>

                                    </div>  <!-- end cold md 6 -->

                                    <div class="col-md-6">
                                    
                                        <img id="showImage" src="{{  (!empty($editData->user_image))? url('upload/admin_images/'.$editData->user_image):url('upload/no_image.jpg') }}" style="width: 100px; height: 100px;">

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

    </section>
    <!-- /.content -->
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection