@extends('frontend.Layouts.main')
@section('main')
    <div class="container">
     <div class="nit-more-menu">
         <ul>
             <li><a href="{{url('/most-played')}}"> most played</a></li>
             <li><a href="{{url('/most-recommend')}}">most recommended </a></li>
             <li><a href="{{route('new-games')}}">NEW</a></li>
         </ul>
     </div>
     <div class="nit-content-new">
        <ul class="games-list">
        

            @foreach($games as $game)



             <li class="game-box"><a href="{{route('game-detail',['gameId'=>$game->game_id])}}"><img src="{{asset($game->game_thumb)}}"/><figcaption>{{$game->shortName()}}</figcaption></a></li>


            @endforeach
      </ul>
     </div>
     <div class="nit-loader">
         <div class="spinner-border"></div>
     </div>
     </div>

@endsection
@section('scripts')
<script>

</script>
@stop
