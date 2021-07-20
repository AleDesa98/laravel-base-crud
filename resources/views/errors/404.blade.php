@extends('layouts.main')

@section('content')
    <section class="py-5 text-center">
        <h1>Error 404</h1>
        <h4>{{ $exception->getMessage() }}</h4>
    </section>
@endsection