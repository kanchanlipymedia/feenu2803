@extends('layouts.app')

@section('title')Contact @stop

@section('styles')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
 

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
        <div class="card-body">
            <div class="table-responsive">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Enquiry Details</h1>
      
    </div>
    @if ($message = Session::get('success'))
         <div class="alert alert-info">
            <p>{{ $message }}</p>
         </div>
         @endif
         <button class="btn btn-primary btn-xs removeAll mb-3">Remove All Data</button>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="checkboxesMain"></th>
                            <th>Id</th>
                            <th>Subject</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>                           
                        </tr>
                    </thead>
                    
                    <tbody>
                        @if($contacts->count())
                        @foreach($contacts as $key => $contact)
                                <tr>                         
                                    <tr id="tr_{{$contact->id}}">
                                    <td><input type="checkbox" class="checkbox" data-id="{{$contact->id}}"></td>
                                    <td>{{ ++$key }}</td>
                                    <td>{{$contact->subject}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->message}}</td>            
                                </tr>
                        @endforeach
                        @endif
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script language="javascript">
    $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>
<script type = "text/javascript" >
    $(document).ready(function() {
        $('#checkboxesMain').on('click', function(e) {
            if ($(this).is(':checked', true)) {
                $(".checkbox").prop('checked', true);
            } else {
                $(".checkbox").prop('checked', false);
            }
        });
        $('.checkbox').on('click', function() {
            if ($('.checkbox:checked').length == $('.checkbox').length) {
                $('#checkboxesMain').prop('checked', true);
            } else {
                $('#checkboxesMain').prop('checked', false);
            }
        });
        $('.removeAll').on('click', function(e) {
            var contactIdArr = [];
            $(".checkbox:checked").each(function() {
                contactIdArr.push($(this).attr('data-id'));
            });
            if (contactIdArr.length <= 0) {
                alert("Choose min one item to remove.");
            } else {
                if (confirm("Are you sure?")) {
                    var contId = contactIdArr.join(",");
                    $.ajax({
                        url: "{{url('delete-all')}}",
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: 'ids=' + contId,
                        success: function(data) {
                            if (data['status'] == true) {
                                $(".checkbox:checked").each(function() {
                                    $(this).parents("tr").remove();
                                });
                                alert(data['message']);
                            } else {
                                alert('Error occured.');
                            }
                        },
                        error: function(data) {
                            alert(data.responseText);
                        }
                    });
                }
            }
        });
    }); 
 </script>
@stop
