@extends('admin.layoutAdmin')
@section('contenido')
<h2>Citas</h2>
<table class="table" id="citasTabla">
<thead>
      <tr class="danger">
          <td >Citas</td>
          <td>Nombre</td>
          <td>Hora</td>
          <td>Fecha</td>
            <td>Servicio</td>
          <td>Correo</td>
          <td></td>
      </tr>
</thead>
<tbody>
    @foreach($citas as $cita)
      <tr>
        <td>  {{$cita->id}} </td>
        <td>  {{$cita->nombre}} </td>
        <td>  {{$cita->hora}} </td>
        <td>  {{$cita->fecha}} </td>
        <td>  {{$cita->servicio}} </td>
        <td>  {{$cita->mail}} </td>
        <td>
          <a href=" ">Confirmar  </a>
          <a href=" ">  Reagendar</a>
          <br>
          <a href=" ">Eliminar</a>
        </td>
      </tr>

    @endforeach
</tbody>
</table>
@endsection
