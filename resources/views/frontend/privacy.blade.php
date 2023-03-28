@php
$privacys =App\Models\Privacy::orderBy('id','DESC')->get();
@endphp
@extends('frontend.Layouts.main')
@section('main')
    <div class="nit-card">      
        <aside class="col-md-12">        
            <div class="card">
                @foreach($privacys as $privacy)
                <div class="card-body">
                    
                        <h1>{{($privacy)-> title}}</h1>
                        
                <div>
                <div>
                    {{($privacy)-> Description}}
                </div>
                @endforeach     
            </div>
        </aside>
 </div>        
            
@endsection
