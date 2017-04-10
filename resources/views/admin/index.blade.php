<html>
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" type="text/css">

</head>
<body>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

</body>
<script>
$(document).ready(function(){
    $('#citasTabla').DataTable();
});
</script>
</html>
