@extends('layouts.app')

@section('title') Users @stop

@section('styles')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Users</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input status" id="status_{{$user->id}}" data-url="{{route('admin.users-status-update')}}" data-user-id="{{$user->id}}" @if($user->status == 1) checked @endif>
                                    <label class="custom-control-label" for="status_{{$user->id}}">   </label>
                                        
                                    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@stop

@section('scripts')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
<script>
$(document).on('change','.status',function(){
    if($(this).is(":checked")) {
        var status = 1;
        
    }else{
        var status = 0;
    }
    var userId = $(this).data('userId');
    var url = $(this).data('url');
    console.log(userId);
    console.log(url);

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url:url,
        type: "POST",
        data: {'user_id':userId, 'status':status},
        success: function (response) {
            if (response.status == "success") {
                    showAlert('success',"Successfully Updated");
                } else {
                    showAlert('error',response.message);
                }
        },
        error: function(request, error) {
            alert("Request: " + JSON.stringify(request));
        }
    });
});
</script>
@stop
