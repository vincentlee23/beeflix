@extends('layouts.master')

<link rel="stylesheet" href="{{asset('css/viewcategory.css')}}">

@section('title', 'Beeflix - View Category')
@section('back-btn')
    <a href="/home">&#x2190;KEMBALI</a>
@endsection


@section('content')
    @if($id == 1)
        <h2>DRAMA</h2>
    @elseif($id == 2)
        <h2>KIDS</h2>
    @else
        <h2>TV SHOW</h2>
    @endif

    <div class="container">
        @foreach($genre as $g)
            <div class="movie-slot">
                <img src="{{$g->photo}}" alt="drama img" class="cover-photo">
                {{$g->title}}
                <a href="/moviedetails/{{$g->id}}">LIHAT FILM</a>
            </div>
        @endforeach
    </div>
    
@endsection