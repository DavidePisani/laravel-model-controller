@extends('layout.app')
    <h1>Lista Film da vedere</h1>


<div class="container">
    @foreach ($movies as $movie)
    <div class="card">
        <h2>{{$movie->title}}</h2>
        <span>{{$movie->original_title}}</span>
        <div>{{$movie->nationality}}</div>
        <div>Release date: {{$movie->date}}</div>
        <div>Vote: {{$movie->vote}}</div>
    </div>
    <br>
    @endforeach

</div>
  
    
