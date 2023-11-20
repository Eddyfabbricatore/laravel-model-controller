@extends('layouts.main')

@section('content')
<h1 class="mb-3">I miei film</h1>

<div class="row d-flex flex-wrap">
    @foreach ($movies as $movie)
        <div class="col-3 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="image">
                    <img src="/img/{{ $movie->title }}.jpg" class="card-img-top" alt="{{ $movie->title }}">
                </div>

                <div class="card-body">
                  <h5 class="card-title">Titolo: {{ $movie->title }}</h5>

                  <p class="card-text">Titolo originale: {{ $movie->original_title }}</p>

                  @if($movie->nationality == 'american')
                    <p class="card-text">Nazionalità: Americana</p>
                  @elseif($movie->nationality == 'american/british')
                    <p class="card-text">Nazionalità: Americana/Inglese</p>
                  @endif

                  <p class="card-text">Data di uscita: {{ $movie->date }}</p>

                  <p class="card-text">Voto: {{ $movie->vote }}</p>

                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    @endforeach
</div>
@endsection
