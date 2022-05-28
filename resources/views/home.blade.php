@extends('layouts.master')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> --}}

@section('title', 'Beeflix - Bee Ready for Fun and Excitement!')
@section('back-btn')
    <a href="/">&#x2190;KEMBALI</a>
@endsection

@section('content')
    <h2>DRAMA</h2>

    <div class="container">
        @foreach($drama as $d)
            <div class="movie-slot">
                <img src="{{$d->photo}}" alt="drama img" class="cover-photo">
                {{$d->title}}
                <a href="/moviedetails/{{$d->id}}">LIHAT FILM</a>
            </div>
        @endforeach
    </div>
    <br><br>

    <h2>KIDS</h2>

    <div class="container">
        @foreach($kids as $k)
            <div class="movie-slot">
                <img src="{{$k->photo}}" alt="kids img" class="cover-photo">
                {{$k->title}}
                <a href="/moviedetails/{{$k->id}}">LIHAT FILM</a>
            </div>
        @endforeach
    </div>
    <br><br>

    <h2>TV SHOW</h2>

    <div class="container">
        @foreach($tvshow as $t)
            <div class="movie-slot">
                <img src="{{$t->photo}}" alt="tvshow img" class="cover-photo">
                {{$t->title}}
                <a href="/moviedetails/{{$t->id}}">LIHAT FILM</a>
            </div>
        @endforeach
    </div>

    <br><br>
@endsection