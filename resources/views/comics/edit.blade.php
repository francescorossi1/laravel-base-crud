@extends('layouts.main');

@section('main-content')
<div class="container my-5">
    <div class="row">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value={{ $comic->title }}>
                </div>
            </div>
            <div class="col-6">

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" rows="8" id="description" name="description">{{ $comic->description }}</textarea>
                </div>
            </div>               
            <div class="col-6">
                <div class="mb-3">
                    <label for="url" class="form-label">Url</label>
                    <input type="text" class="form-control" id="url" name="thumb" value={{ $comic->thumb }}>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" value={{ $comic->price }}>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value={{ $comic->series }}>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data sconto</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value={{ $comic->sale_date }}>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" value={{ $comic->type }}>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna indietro</a>
                    <button type="submit" class="btn btn-success">Invia</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection