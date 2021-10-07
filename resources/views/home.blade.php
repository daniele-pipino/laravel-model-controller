@extends('layout.main')
@section('title', 'Home')
@section('content')
<section id="home-section">
    <div class="container text-center">
        <h1 class="my-5">Film</h1>

        {{-- card per i movie --}}
        @foreach ($movies as $movie)
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{$movie['title']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Original-Title: {{$movie['original_title']}}</h6>
            <h6 class="card-subtitle mb-2 text-success">Nationality: {{$movie['nationality']}}</h6>
            <p class="card-text">Uscito il:{{$movie['date']}}</p>
            <p class="card-text text-primary">Voto: {{$movie['vote']}}</p>
          </div>
        </div>
        @endforeach
    </div>
</section>
@endsection