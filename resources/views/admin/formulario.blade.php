@if(isset($servicio))
  <div class="form-group">
    {!! csrf_field()!!}
    <label for="nombre">Nombre de servicio</label><br>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $servicio->nombre }}" required>
  </div><br><br>
  <div class="form-group">
    <label for="descripcion">Descripción del servicio</label><br>
    <input type="text" class="form-control" id="descripcion" name="descripcion" size="50" rows="5" placeholder="Descripción" value="{{ $servicio->descripcion }}" required>
  </div><br><br>
  <div class="form-group">
    @if( "{{$servicio-> imagen}}"  == "")
      <label for="exampleInputFile">Elegir una imagen</label>
      <input type="file" id="exampleInputFile" name="file" value="{{ $servicio->imagen }}" >
      <p class="help-block">{{ $servicio->imagen }}</p>
    @else
      <label for="exampleInputFile">Elegir una imagen</label>
      <input type="file" id="exampleInputFile" name="file" value="nooo" >
      <p class="help-block">Sin imagen</p>
    @endif
  </div>

@else
<div class="form-group">
  {!! csrf_field()!!}
  <label for="nombre">Nombre de servicio</label><br>
  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" required>
</div><br><br>
<div class="form-group">
  <label for="descripcion">Descripción del servicio</label><br>
  <input type="text" class="form-control" id="descripcion" name="descripcion" size="50" rows="5" placeholder="Descripción" value="{{old('descripcion')}}" required>
</div><br><br>
<div class="form-group">
  <label for="exampleInputFile">Elegir una imagen</label>
  <input type="file" id="exampleInputFile" name='file' required>
  <p class="help-block">Imagen del servicio.</p>
</div>
@endif
