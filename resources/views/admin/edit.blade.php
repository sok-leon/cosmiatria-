@extends('admin.layoutAdmin')
@section('contenido')
<h2>Actualizar datos</h2>
<form method="POST" action="{{$servicio->id}}">

   {!! csrf_field()!!}
   @include('admin.nServicio')
   <br>
    <button type="submit" class="btn btn-default">Actualizar</button>
</form>
@endsection
