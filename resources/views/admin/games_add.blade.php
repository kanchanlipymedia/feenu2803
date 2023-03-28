@extends('layouts.app')

@section('title') @if(empty($game)) Add @else Edit @endif Game @stop

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">@if(empty($game)) Add @else Edit @endif Game</h1>

    <!-- Content Row -->

    <form action="" method="post" enctype='multipart/form-data'>
        <div class="row">
            @csrf
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">@if(empty($game)) Add @else Edit @endif Game</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Game Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="@if(!empty($game)){{$game->name}}@endif" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->category_id}}" @if(!empty($game)) @if($category->category_id == $game->category_id) selected @endif @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Game Image</label>
                            <input type="file" class="form-control" id="game_thumb" name="game_thumb" value="@if(!empty($game)) <img src={{asset($game->game_thumb)}} @endif">

                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Iframe Url</label>
                            <input type="text" class="form-control" id="ifame_url" name="ifame_url" value="@if(!empty($game)){{$game->ifame_url}}@endif" >
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Walkthrough Video</label>
                            <input type="text" class="form-control" id="walk_through_link" name="walk_through_link" value="@if(!empty($game)){{$game->walk_through_link}}@endif" >
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">App store link</label>
                            <input type="text" class="form-control" id="app_store_link" name="app_store_link" value="@if(!empty($game)){{$game->app_store_link}}@endif" >
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Google Store Link</label>
                            <input type="text" class="form-control" id="google_store_link" name="google_store_link" value="@if(!empty($game)){{$game->google_store_link}}@endif">
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">How to play</label>
                            <input type="text" class="form-control" id="howtoplay" name="how_to_play" value="@if(!empty($game)){{$game->how_to_play}}@endif" >
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="@if(!empty($game)){{$game->description}}@endif" required>
                        </div>
                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags</label>

                            <select class="form-control" id="tags" name="tags[]" multiple required>
                                <option value="">Select Tags</option>
                                @php
                                    if(!empty($game))
                                        $tagsIdArray = explode(',',$game->tags);
                                @endphp
                                @foreach ($tags as $tag)
                                    <option value="{{$tag->tag_id}}" @if(!empty($game)) @if(in_array($tag->tag_id,$tagsIdArray)) selected @endif @endif>{{$tag->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Other Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Height</label>
                            <input type="number" class="form-control" id="height" name="height" value="@if(!empty($game)){{$game->height}}@endif" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@stop
