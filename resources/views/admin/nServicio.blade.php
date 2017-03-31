@extends('admin.layoutAdmin')


@section('contenido')

<h3>Crear nuevo servicio</h3>
  <form class="form-inline" method="POST" action="CrearServicio">
    <div class="form-group">
      {!! csrf_field()!!}
      <label for="nombre">Nombre de servicio</label><br>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div><br><br>
    <div class="form-group">
      <label for="descripcion">Descripción del servicio</label><br>
      <input type="text" class="form-control" id="descripcion" name="descripcion" size="50" rows="5" placeholder="Descripción">
    </div><br><br>
    <div class="form-group">
      <label for="exampleInputFile">Elegir una imagen</label>
      <input type="file" id="exampleInputFile">
      <p class="help-block">Imagen del servicio.</p>
    </div>
    <br><br>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>
@endsection
