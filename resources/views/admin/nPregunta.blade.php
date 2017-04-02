@extends('admin.layoutAdmin')


@section('contenido')

<h3>Crear nueva pregunta</h3>
  <form class="form-inline" method="POST" action="CrearPregunta">
    <div class="form-group">
      {!! csrf_field()!!}
      <label for="nombre">Pregunta</label><br>
      <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Nombre" required>
    </div><br><br>
    <div class="form-group">
      <label for="descripcion">Respuesta</label><br>
      <input type="text" class="form-control" id="respuesta" name="respuesta" size="50" rows="5" placeholder="Descripción" required>
    </div><br><br>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>
@endsection
