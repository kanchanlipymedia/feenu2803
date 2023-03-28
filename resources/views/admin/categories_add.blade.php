@extends('layouts.app')

@section('title') @if(empty($category)) Add @else Edit @endif Category @stop

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">@if(empty($category)) Add @else Edit @endif Category</h1>

    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">@if(empty($category)) Add @else Edit @endif Category</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="@if(!empty($category)){{$category->name}}@endif">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop