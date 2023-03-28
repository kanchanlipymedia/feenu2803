@extends('layouts.app')

@section('title') Reports @stop

@section('styles')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reports</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Reports</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Comment</th>
                            <th>Game</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reports as $report)
                        <tr>
                            <td>{{$report->comment}}</td>
                            <td>{{$report->game->name}}</td>
                            <td>
                                @if(!empty($report->user))
                                    {{$report->user->name}}
                                @else
                                    Anonymous User
                                @endif
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
    //Change Status
    $(document).on("change", ".change-status", function () {

        if($(this).is(":checked")) {
            var status = 1;
        }else{
            var status = 0;
        }
        var url = $(this).data('url');
        var commentId = $(this).data('id');
        var data = {
            'commentId': commentId,
            'status':status
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "POST",
            data: data,
            success: function (response) {
                if (response.status == "success") {
                    showAlert('success',"Successfully Updated");
                } else {
                    showAlert('error',response.message);
                }
            },
            error: function (request, error) {
                alert("Request: " + JSON.stringify(request));
            },
        });
    });


</script>
@stop
