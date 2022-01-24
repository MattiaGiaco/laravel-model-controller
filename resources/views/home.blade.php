@extends('layouts.main')

@section('content')
<div class="container">
  <h1>Movies</h1>
  
  <div class="d-flex flex-wrap my-3">

    @forelse ($movies as $movie)
    <div class="card m-3" style="width: 18rem;">
      <div class="card-body text-center">
        <h3 class="card-title">{{ $movie->title }}</h3>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $movie->original_title }}</li>
        <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
        <li class="list-group-item">Release date: {{ $movie->date }}</li>
        <li class="list-group-item">Vote: <strong>{{ $movie->vote }}</strong></li>
      </ul>
    </div>
    @empty
    <h2>Nessun risultato</h2>
    @endforelse

  </div>
    
</div>
@endsection
