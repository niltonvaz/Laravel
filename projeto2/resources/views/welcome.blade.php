@extends('layouts.main')
@section('title', 'Lamarhon Principal')
@section('content')

@foreach($events as $event)
<p>Não funcionaaaaaaaaaaaaaaaaaaaa por queeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee kkkk</p>
<p>{{ $event->titulo }} -- {{ $event->descricao }}</p>

@endforeach

@endsection

 