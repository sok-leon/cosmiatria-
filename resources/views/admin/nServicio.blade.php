@extends('admin.layoutAdmin')
@section('contenido')
<h3>Crear nuevo servicio</h3>
  <form class="form-inline" method="POST" action="CrearServicio" enctype="multipart/form-data">
    {!! csrf_field()!!}
    @include('admin.formulario')
    <br>
     <button type="submit" class="btn btn-default">Enviar</button>
 </form>
@endsection
