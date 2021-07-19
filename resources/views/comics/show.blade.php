@extends('layouts.main')

@section('content')
    <h1>{{ $comic->title }}</h1>

    <div class="row my-4">
        <div class="col-3">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
        </div>
        <div class="col-9">
            <h4>Serie</h4>
            <p>{{ $comic->series }}</p>
            <h4>Prezzo</h4>
            <p>{{ $comic->price }} &euro;</p>
            <h4>Descrizione</h4>
            <p>{{ $comic->description }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a class="btn btn-primary" href="{{ route("comics.index") }}">Torna all'elenco comics</a>
    </div>
@endsection