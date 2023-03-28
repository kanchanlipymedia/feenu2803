@extends('layouts.app')

@section('title') @if(empty($privacy)) Add @else Edit @endif Privacy @stop

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <!--<h1 class="h3 mb-4 text-gray-800">@if(empty($privacy)) Add @else Edit @endif About</h1>-->

    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">@if(empty($privacy)) Add @else Edit @endif Privacy</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="@if(!empty($privacy)){{$privacy->title}}@endif" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Description</label>
                            <textarea class="form-control" id="Description" name="Description">@if(!empty($privacy)){{$privacy->Description}}@endif</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script>
$(document).ready(function () {
    tinymce.init({
        selector: "#Description",
    });
});
</script>

@stop
@section('scripts')
<script>
$(document).ready(function () {
    tinymce.init({
        selector: "#Description"
        mode : "textareas",
      theme : "advanced",
      force_br_newlines : false,
      force_p_newlines : false,
      forced_root_block : ''
    });

});
</script>


@stop