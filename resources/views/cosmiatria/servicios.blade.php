@extends('layout')
@section('contenido')
<h1> Servicios </h1><br>
<ul>
  @foreach ($servicios as $servicios)
    <li>
        <h2><br>
          {{ $servicios->nombre}}
        </h2>
        <p>{{ $servicios->descripcion}}</p>
    </li>
  @endforeach
</ul>
@endsection
