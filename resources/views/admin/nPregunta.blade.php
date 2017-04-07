@extends('admin.layoutAdmin')
@section('contenido')
<h3>Crear nueva pregunta</h3>
  <form class="form-inline" method="POST" action="CrearPregunta">
    {!! csrf_field()!!}
    @include('admin.formulariop')
    <br><br>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>
@endsection
