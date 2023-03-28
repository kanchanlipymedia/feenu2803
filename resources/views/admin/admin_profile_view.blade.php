@extends('layouts.app')

@section('title') @if(empty($users)) Add  @endif Profile @stop

@section('content')

<div class="container-full">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Page Heading -->
           
        <!-- DataTales Example -->
         <div class="card  mb-4">          
            <div class="card-header ">
                <center><h1 class="m-0 font-weight-bold text-primary">Profile</h1></center>
                <center><img class="" src="{{(!empty($adminData->user_image))? url('upload/admin_images/'.$adminData->user_image):url('upload/no_image.jpg') }}" alt="User Avatar" width="80px"></center>
            </div>
            <div class="row">
              <div class="col-xl-2 col-md-6 mb-4">
                <div class="card  h-100 py-2">
                    <div class="card-body">
                    
                    </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card h-100 py-2">
                    <div class="card-body">
                     <h3>Admin Name:</h3>
                     <h3>Email:</h3>
                    </div>
                </div>
              </div>   
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card  h-100 py-2">
                    <div class="card-body">
                     
                      
                      <h3>{{ $adminData->name }}</h3>
                      <h3>{{ $adminData->email }}</h3>
                    
                    </div>
                </div>
              </div>  
              <div class="col-xl-2 col-md-6 mb-4">
                <div class="card  h-100 py-2">
                    <div class="card-body">
                    
                    </div>
                </div>
              </div>                
             
           </div>
           <center><a href="{{route('admin.profile.edit')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i>Edit Profile</a></center>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection