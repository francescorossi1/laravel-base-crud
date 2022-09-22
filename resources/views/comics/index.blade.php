@extends('layouts.main')

@section('main-content')
<div class="jumbotron">
    <div class="main-content py-3">
      <div class="container">
        <a href="#" class="blue-button font-20 moved">CURRENT SERIES</a>
        <div class="d-flex row row-cols-xl-6 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 flex-wrap justify-content-center py-3">
          @forelse($comics as $comic)
          <div class="col">
            <figure>
              <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></a>
              <figcaption>{{ $comic->series }}</figcaption>
            </figure>
            <div class="buttons mb-3 d-flex flex-wrap">
              <a href="{{ route('comics.edit', $comic->id) }}" class="blue-button large me-2 my-1">EDIT</a>
              <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="blue-button large border-0 me-2 my-1">DELETE</a>
              </form>
            </div>
          </div>
          @empty
            <h3>Nessun fumetto disponibile. Aggiungine uno! </h3>
          @endforelse
        </div>
        <div class="d-flex justify-content-center">
          <a href="#" class="blue-button large me-2">LOAD MORE</a>
          <a href="{{ route('comics.create') }}" class="blue-button large">ADD MORE</a>
        </div>
      </div>
    </div>
  </div>
@endsection