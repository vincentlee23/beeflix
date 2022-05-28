@extends('layouts.master')

<link rel="stylesheet" href="{{ asset('css/moviedetails.css') }}">

@section('title', 'Beeflix - Movie Details')
@section('back-btn')
    <a href="/home">&#x2190;KEMBALI</a>
@endsection

@section('content')
    <div class="container">

        <div class="photo">
            <img src="{{$movie->photo}}" alt="">
        </div>
        
        <div class="desc">
            {{$movie->title}} <br>
            {{$movie->rating}} / 10 <br>
            {{$movie->description}} <br><br>
            Kategori: 
            @if ($movie->genre_id==1)
                <a href="/viewcategory/1">Drama</a>
            @elseif ($movie->genre_id==2)
                <a href="/viewcategory/2">Kids</a>
            @else
                <a href="/viewcategory/3">TV Show</a>
            @endif
        </div>

        <div class="episodes">
            <h4>LIST OF EPISODES</h4>
            <table>
                <tr>
                    <th style="width:10%">Episode</th>
                    <th>Title</th>
                </tr>
                @foreach($episodes as $eps)
                <tr>
                    <td>{{$eps->episode}}</td>
                    <td>{{$eps->title}}</td>
                </tr>
                @endforeach
            </table>
            {{$episodes->links()}}
        </div>
    </div>
    
@endsection