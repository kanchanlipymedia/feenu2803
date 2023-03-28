@extends('layouts.app')

@section('title') Games @stop

@section('styles')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Games</h1>
        <a href="{{route('admin.games-add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add Game</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Games</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Games Thumb</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($games as $game)
                        <tr>
                            <td>{{$game->name}}</td>
                            <td>{{$game->category->name}}</td>
                            <td><img src="{{asset($game->game_thumb)}}" width="50"/></td>
                            <td><a href="{{route('admin.games-edit',['gameId'=>$game->game_id])}}"><i class="fas fa-edit"></i></a> | <a href="{{route('admin.games-delete',['gameId'=>$game->game_id])}}"><i class='fas fa-trash-alt' style='color:red'></i></a></td>
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
@stop
