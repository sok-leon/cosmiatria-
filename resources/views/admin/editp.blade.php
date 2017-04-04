@extends('admin.layoutAdmin')
@section('contenido')
<h2>Actualizar pregunta</h2>
<form method="POST" action="{{$pregunta->id}}" enctype="multipart/form-data">

   {!! csrf_field()!!}
   @include('admin.formulariop')
   <br><br>
    <button type="submit" class="btn btn-default">Actualizar</button>
</form>
@endsection
