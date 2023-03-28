@php
$abouts =App\Models\About::orderBy('id','DESC')->get();
@endphp
@extends('frontend.Layouts.main')
@section('main')
    <div class="nit-card">      
        <aside class="col-md-12">        
            <div class="card">
                @foreach($abouts as $about)
                <div class="card-body">
                    
                        <h1>{{($about)-> title}}</h1>
                        
                <div>
                <div>
                    {{($about)-> Description}}
                </div>
                @endforeach     
            </div>
        </aside>
 </div>        
            
@endsection