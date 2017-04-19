@extends('admin.layoutAdmin')
@section('contenido')
<a href="nPregunta" class="btn btn-success" role="button">Crear pregunta</a>
@endsection
@section('tabla')
<h2>Preguntas</h2>
<table class="table table-hover">
  <thead>
      <tr class="danger">
          <td >Id</td>
          <td>Pregunta</td>
          <td>Respuesta</td>
          <td></td>
      </tr>
  </thead>
  <tbody>
    @foreach($preguntas as $preguntas)
      <tr>
        <td>  {{$preguntas->id}} </td>
        <td>  {{$preguntas->pregunta}} </td>
        <td>  {{$preguntas->respuesta}} </td>
        <td>
          <a href="{!! URL::to('/editp/'.$preguntas->id) !!}">Editar</a>
                    <br>
          <a href="{!! URL::to('/eliminarp/'.$preguntas->id) !!}">Eliminar</a>
        </td>
      </tr>
      </tbody>
    @endforeach
  </tbody>
</table>
@endsection
