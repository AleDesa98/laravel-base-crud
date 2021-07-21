@extends('layouts.main')

@section('content')
    <h1>Modifica del comic: {{ $comic->title }}</h1>
    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Visualizza</a>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo" name="title" value="{{ $comic->title }}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" placeholder="Inserisci il nome della serie" name="series" value="{{ $comic->series }}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo" name="price" value="{{ $comic->price }}">
        </div>
        <div class="form-group">
            <label for="thumb">URL immagine</label>
            <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'url dell'immagine" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione" rows="3">{{ $comic->description }}"</textarea>
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo" name="type" value="{{ $comic->type }}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="date" class="form-control" id="sale_date" placeholder="Inserisci la data di vendita" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Elenco comics</a>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection