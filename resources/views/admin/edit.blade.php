@extends('admin.layoutAdmin')
@section('contenido')
<h2>Actualizar datos</h2>
<form class="form-inline" method="POST" action="{{$servicio->id}}" enctype="multipart/form-data">

   {!! csrf_field()!!}
   @include('admin.formulario')
   <br>
    <button type="submit" class="btn btn-default">Actualizar</button>
</form>
@endsection
