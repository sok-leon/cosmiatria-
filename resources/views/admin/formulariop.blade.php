@if(isset($pregunta))
  {!! csrf_field()!!}
<div class="form-group">
  <label for="nombre">Pregunta</label><br>
  <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Nombre" value="{{ $pregunta->pregunta }}" required>
</div><br><br>
<div class="form-group">
  <label for="descripcion">Respuesta</label><br>
  <input type="text" class="form-control" id="respuesta" name="respuesta" size="50" rows="5" placeholder="Descripción" value="{{ $pregunta->respuesta }}" required>
</div>

@else
{!! csrf_field()!!}
<div class="form-group">
<label for="nombre">Pregunta</label><br>
<input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Nombre" value="{{old('pregunta')}}"required>
</div><br><br>
<div class="form-group">
<label for="descripcion">Respuesta</label><br>
<input type="text" class="form-control" id="respuesta" name="respuesta" size="50" rows="5" placeholder="Descripción" value="{{old('respuesta')}}" required>
</div>

@endif
