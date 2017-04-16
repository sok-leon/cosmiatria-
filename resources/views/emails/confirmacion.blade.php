<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Hola, estamid@:<strong> {{$cita->nombre}}</strong><br>

      <dd>Hemos recibido y ACEPTADO su cita para el servicio solicitado {{$cita->servicio}}
      el día {{$cita->fecha}} a la hora que nos indico {{$cita->hora}} hrs.<br>

	<br>
      Agradecemos su preferencia esperamos sea puntual, gracias.<br>

      <br>Att.<br>
      Cosmetológa Elizabeth Parra.
    </p>
  </body>
</html>
