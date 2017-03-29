<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cosmiatría</title>
<link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/css/styles2.css">
<!--prueba 1-->
</head>
<body>
<div class="menu-wrapper">
  <div class="menu">
    <ul>
      <li><a href="index.php" class="active">Inicio</a></li>
      <li><a href="servicios.php">Servicios</a></li>
      <li><a href="preguntas.php">Preguntas</a></li>
    </ul>
  </div>
  <div class="call">
    <h1>Tel. :<span> telefono </span></h1>
  </div>
</div>
<!--- menu-wrapper div end -->
<div class="clearing"></div>
<div class="border-bottom"></div>
<div class="logo-wrapper">
  <!--div class="leftshadow"><img src="images/logo-wrap-left.jpg" /></div-->
  <div class="logo">
    <h1>Elizabeth Parra</h1>
    <h2 align="right" style="width: 200px;"> Cosmetóloga y cosmiatra</h2>
  </div>

</div>
<div class="clearing"></div>

<div class ="banner-wrapper">
  @yield('slider')


</div>

<!--- banner wrapper div end -->
<div class="clearing"></div>
<div class="container">


  <div class="panel-wrapper">
    @yield('contenido')
    <div class="panel" style="width: 450px;">
      @yield('servicios')
    </div>

    <div class="panel" style="width: 100px;">
      <div class="imgbg"></div>
      <div class="content"></div>
    </div>


    <div class="panel">
      @yield('beneficios')
    </div>
  </div>
  <!--- panel wrapper div end -->
</div>
<!--- container div end -->
<div class="clearing"></div>
<div class="panel-wrapper">
  <div class="panel marRight30">
    @yield('contacto')
  </div>
  <div class="panel marRight30">
    <div class="title">

    </div>

    <div class="midcontent">
      <div class="midcontentlink marRight40">

    </div>
  </div>
  <div class="panel">
    @yield('sociales')

  </div>
</div>

    <p align="right" style="width: 1200px;" ><a href="login/login.php"><img src="images/admin.jpg"/></a></p>

<div class="footer-wrapper">
  <div class="footer">
    <p> © 2017 All Rights Reserved.<a href="http://www.alltemplates.com"> < Computer and Services Networking Inc.  ></a> </p>
  </div>
</div>
</body>
</html>
