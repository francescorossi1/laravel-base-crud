@extends('layouts.main')

@section('main-content')
<div class="jumbotron">
    <div class="main-content py-3">
      <div class="container">
        <a href="#" class="blue-button font-20 moved">CURRENT SERIES</a>
        <div class="d-flex row row-cols-xl-6 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 flex-wrap justify-content-center py-3">
          @forelse($comics as $comic)
          <figure>
            <a href="{{ route('comics.show', 0) }}"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></a>
            <figcaption>{{ $comic['series'] }}</figcaption>
          </figure>
          @empty
            <h3>Nessun fumetto disponibile. Aggiungine uno! </h3>
          @endforelse
        </div>
        <div class="d-flex justify-content-center">
          <a href="#" class="blue-button large">LOAD MORE</a>
        </div>
      </div>
    </div>
  </div>
@endsection