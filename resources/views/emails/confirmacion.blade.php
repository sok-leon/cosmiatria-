<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Hola, estamid@:<strong> {{$cita->nombre}}</strong><br>

      <dd>Hemos recibido y ACEPTADO su cita para el servicio solicitado {{$cita->servicio}}
      el dia {{$cita->fecha}} a la hora que nos indico {{$cita->hora}} hrs.<br>

	<br>
      Agradecemos su preferencia esperamos sea puntualidad, gracias.<br>

      <br>Att.<br>
      Cosmetologa XXXX XXXX
    </p>
  </body>
</html>
