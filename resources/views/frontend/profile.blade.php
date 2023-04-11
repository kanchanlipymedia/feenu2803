@extends('frontend.Layouts.main')
@section('main')
    <div class="nit-card">
        <aside class="col-md-8">
            <div class="profile-card-body">
                 <a href="{{route('editprofile')}}"><i class="fas fa-edit" placeholder="edit_profile"></i></a>
                <div class="row">
                    <div class="col-md-3">
                        <label><a href=""><img src="https://via.placeholder.com/200" style="border-radius:10px;"></a></label>
                    </div>
                    <div class=" col-md-6">
                        <h5>{{ Auth::user()->name}} {{ Auth::user()->lastname}}</h5>
                        <h7> <b>About me</b></h7>
                        <p> {{Auth::user()->about}}</p>
                        <h7><b>Gender - </b>{{Auth::user()->gender}}</h7><br/>
                        <h7><b>Email  -    </b>{{Auth::user()->email}}</h7>  
                        </div>   
                        <div class="col-md-3">
                            @if(!empty(Auth::user()->fblink))
                            <a href= "{{ Auth::user()->fblink }} " target="blank" class="fab fa-facebook" style="font-size:20px;"></a>
                            @endif
                            @if(!empty(Auth::user()->twlink))
                            <a href="{{Auth::user()->twlink}}" target="blank" class="fab fa-twitter" style="font-size:20px;"></a>
                            @endif
                            @if(!empty(Auth::user()->instalink))
                            <a href="{{Auth::user()->instalink}}" target="blank" class="fab fa-instagram" style="font-size:20px;"></a>
                            @endif                                        
                        </div>                                 
                    </div>
               <!-- start slider-->

               <div class="nit-related gGame">
                <h6 style="color:#328bdb; padding:10px" >Last Played Games</h6>
                <div class="owl-carousel lastPlayed-carousel owl-theme">
                    @foreach ($recentPlayGames as $game)
                        <div class="item">
                            <a href="{{ route('game-detail', ['gameId' => $game->game_id]) }}"><img src="{{ asset($game->game_thumb) }}" alt=""><figcaption>{{ $game->shortName() }}</figcaption></a>
                        </div>
                    @endforeach
               </div>
                    <h6 style="color:rgb(240, 199, 20); padding:10px">Favorite Games</h6>
               <div class="owl-carousel fvt-carousel owl-theme">
                    @foreach ($favoriteGames as $game)
                        <div class="item">
                            <a href="{{ route('game-detail', ['gameId' => $game->game_id]) }}"><img src="{{ asset($game->game_thumb) }}" alt=""><figcaption>{{ $game->shortName() }}</figcaption></a>
                        </div>
                    @endforeach
               </div>
           </div>

           <!-- end slider-->
            </div>
        </aside>

    </div>

@endsection
