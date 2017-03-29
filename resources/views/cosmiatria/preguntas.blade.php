@extends('layout')
@section('contenido')
<hr class="featurette-divider">
  <div class="row featurette">
    <h3>Preguntas frecuentes</h3>
    <ul>
      @foreach ($preguntas as $pregunta)
        <li>
            <h2>
              {{ $pregunta->pregunta}}
            </h2>
              <strong>{{ $pregunta->respuesta}}</strong>

        </li>
      @endforeach
    </ul>
</div>
@endsection
