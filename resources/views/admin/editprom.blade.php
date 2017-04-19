@extends('admin.layoutAdmin')
@section('contenido')
<h2>Actualizar imagen</h2>
<form class="form-inline" method="POST" action="{{$promocion->id}}" enctype="multipart/form-data">
   {!! csrf_field()!!}
   <div class="form-group">
     @if( "{{$promocion-> imagen}}"  == "")
       <label for="exampleInputFile">Elegir una imagen</label>
       <input type="file" id="exampleInputFile" name="file" value="{{ $promocion->imagen }}" >
       <p class="help-block">Sin imagen</p>
     @else
       <label for="exampleInputFile">Elegir una imagen</label>
       <input type="file" id="exampleInputFile" name="file" value="nooo" >
       <p class="help-block">{{ $promocion->imagen }}</p>
     @endif
   </div>
   <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>
@endsection
