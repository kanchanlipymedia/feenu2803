@extends('frontend.Layouts.main')
@section('main')
<div class="nit-card">
    <aside class="col-md-8">

        <div class="profile-card-body">
            <div class="row">
                <div class="col-md-4">
                    <label><a href="https://placeholder.com"><img src="https://via.placeholder.com/200"></a></label>
                </div>
                <div class=" col-md-8">
                    <h6>{{ $user->name }} {{ $user->lastname }}</h6>
                    <h6> <b>About me</b></h6>
                    <p> {{ $user->about }}</p>
                    <h6><b>Gender - </b>{{ $user->gender }}</h6><br />
                    <h6><b>Email - </b>{{ $user->email }}</h6>
                </div>
            </div>
            <!-- start slider-->

            <div class="nit-related gGame">

                <h6 style="color:rgb(240, 199, 20)">Favorite Games</h6>
                <div class="owl-carousel fvt-carousel owl-theme">
                    @foreach ($favoriteGames as $game)
                    <div class="item">
                        <a href="{{ route('game-detail', ['gameId' => $game->game_id]) }}">
                            <img src="{{ asset($game->game_thumb) }}" alt="{{ $game->shortName() }}">
                            <figcaption>{{ $game->shortName() }}</figcaption>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- end slider-->
        </div>
    </aside>

</div>
@endsection
