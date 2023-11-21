@extends('layouts.main')

@section('content')
<h1 class="mb-3">{{ $title }}</h1>

<div class="row d-flex flex-wrap">
    @foreach ($movies as $movie)
        <div class="col-3 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="image">
                    <img src="/img/{{ $movie->title }}.jpg" class="card-img-top" alt="{{ $movie->title }}">
                </div>

                <div class="card-body">
                  <h5 class="card-title">Titolo: {{ $movie->title }}</h5>

                  <p class="card-text">Voto: {{ $movie->vote }}</p>

                  <a href="{{ route('moviesDetails', ['id' => $movie->id]) }}" class="btn btn-primary">Info</a>
                </div>
              </div>
        </div>
    @endforeach
</div>
@endsection
