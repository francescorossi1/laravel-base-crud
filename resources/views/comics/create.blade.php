@extends('layouts.main');

@section('main-content')
<div class="container my-5">
    <div class="row">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>
            <div class="col-6">

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="textarea" class="form-control" id="description" name="description">
                </div>
            </div>               
            <div class="col-6">
                <div class="mb-3">
                    <label for="url" class="form-label">Url</label>
                    <input type="text" class="form-control" id="url" name="thumb">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data sconto</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type">
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