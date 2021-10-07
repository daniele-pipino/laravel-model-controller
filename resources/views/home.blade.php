@extends('layout.main')
@section('title', 'Home')
@section('content')
<section id="home-section">
    <div class="container text-center">
        <h1 class="my-5">Ciao questa è la Home</h1>

        {{-- card per i movie --}}
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
</section>
@endsection