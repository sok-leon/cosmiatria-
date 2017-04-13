@extends('admin.layoutAdmin')
@section('contenido')

<div style="text-align:center;" class="form-group">
  <img class="img-circle" src="{{URL::asset('storage/sok.jpg')}}" alt="...">
</div>
<br>
<form  class="form-inline" style="text-align:center;">
  <div class="form-group" >
    <label for="exampleInputEmail1">Admin</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Username">
  </div>
  <br><br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <br><br>
  <button type="submit" class="btn btn-success">Enviar</button>
</form>
@endsection
