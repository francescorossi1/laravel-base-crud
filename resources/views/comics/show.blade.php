@extends('layouts.main')

@section('main-content')
<div class="jumbotron">
  <div class="main-content pt-5 pb-4 bg-primary">
  </div>
</div>
<div id="comic">
  <div class="comic-details">
    <div class="container">
      <div class="row pt-5">
        <div class="col cover">
          <figure>
            <span class="top">{{ $comic->type }}</span>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic->series }}">
            <span class="bottom">View Gallery</span>
          </figure>
          <h2>{{ $comic->title }}</h2>
          <div class="info d-flex">
            <div class="large">
              <span class="price">U.S. Price: <strong>{{ $comic->price }}</strong></span>
              <span class="available">Available</span>
            </div>
            <div class="check">
              <a href="#">Check Availability</a>
            </div>
          </div>
          <p>{{ $comic->description }}</p>
        </div>
        <div class="col-4 adv-col">
          <h5>Advertisement</h5>
          <figure class="adv">
            <img src="{{asset('img/adv.jpg')}}" alt="{{ $comic->series }}">
          </figure>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col">
          <div class="specs">
            <h4>Specs</h4>
            <hr>

            <div class="type">
              <h6>Series:</h6>
              <span>{{ $comic->series }}</span>
            </div>
            <hr>

            <div class="price">
              <h6>U.S. Price:</h6>
              <h6>{{ $comic->price }}</h6>
            </div>
            <hr>

            <div class="sale-date mb-3">
              <h6>On Sale Date:</h6>
              <h6>{{ date($comic->sale_date) }}</h6>
            </div>
            <hr>
            <div class="mb-4">
              <a href="{{ route('comics.edit', $comic->id) }}" class="blue-button large">EDIT</a>
              <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete">
                @csrf
                @method('DELETE')
                <button class="blue-button large border-0 me-2 my-1">DELETE</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js-script')
    <script>
      const deleteForms = document.querySelectorAll('.delete');
      deleteForms.forEach(form => {
        form.addEventListener('submit',(e) => {
          e.preventDefault();
          const hasConfirmed = confirm('Vuoi davvero eliminare questo elemento?');
          if(hasConfirmed) form.submit()
          else return;
        })
      });
    </script>
@endsection