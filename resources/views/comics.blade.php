@extends('layouts.main')

@section('title', 'Comics')

@section('content')
    <div class="container d-flex flex-wrap justify.content-center">
        @foreach($comic as $com)
            <div class="carta ">
                <div class="img_card">
                    <img src="{{$com['src']}}" alt="">
                </div>
                <h3>{{$com['text']}}</h3>
            </div>  
        @endforeach
    </div>
@endsection


