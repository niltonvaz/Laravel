@extends('layouts.main')
@section('title', 'Lamarhon Principal')
@section('content')

@foreach($events as $event)

<p>{{ $event->titulo }} -- {{ $event->descricao }}</p>

@endforeach

@endsection

 