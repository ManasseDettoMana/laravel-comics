@extends('layouts.main')

@section('title', 'Comics')

@section('content')
    <div class="container">
        <div class="row ">
        @foreach($comic as $com)
            <div class="card ">
                <img src="{{$com['src']}}" alt="">
            </div>  
            <h3>{{$com['text']}}</h3>

        @endforeach
        </div>
    </div>
@endsection


