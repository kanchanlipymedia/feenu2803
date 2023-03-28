@extends('frontend.Layouts.main')
@section('title')
@section('content')
@section('main')
    <div class="container">
     <div class="nit-more-menu">
         <ul>
             <li><a href="{{url('/most-played')}}"> most played</a></li>
             <li><a href="{{url('/most-recommend')}}">most recommended </a></li>
             <li><a href="{{url('/new-game')}}">NEW</a></li>
         </ul>
     </div>
     <div class="nit-content">
        <ul>
             <li><div class="nit-ads"><a href="#"><img src="{{url('frontend/images/more/ads.png')}}" alt=""></a></div></li>
             <li class="newGame"><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
             <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li ><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i2.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i3.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li class="newGame"><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i4.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i5.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i6.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i7.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i8.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i4.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i3.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i2.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li class="newGame"><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
             <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li ><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i2.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i3.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li class="newGame"><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i4.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i5.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i6.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i7.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i8.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i4.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i3.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i2.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li class="{{url('/game')}}"><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
             <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li ><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i2.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i3.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li class="newGame"><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i4.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i5.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i6.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i7.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i8.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i4.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i3.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i2.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li class="newGame"><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
             <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i1.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li ><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i2.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i3.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li class="newGame"><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i4.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i5.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i6.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i7.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i8.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i4.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i3.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
                <li><a href="{{url('/game')}}"><img src="{{url('frontend/images/more/i2.png')}}" alt=""><figcaption>ROAD</figcaption></a></li>
           </ul>
        </div>
     <div class="nit-loader">
         <div class="spinner-border"></div>
     </div>
     </div>

@endsection
@stop
