@extends('admin.layoutAdmin')
@section('contenido')
<h2>Actualizar Cita</h2>
<form method="POST" action="{{$cita->id}}">

   {!! csrf_field()!!}
   @include('cosmiatria.contacto')
   <br><br>
    <button type="submit" class="btn btn-default">Actualizar</button>
</form>
@endsection
