<html>
<head>
  <meta charset="utf-8"/>
  <title>Carrito de Compras</title>
  <link rel="stylesheet" type="text/css" href="./css/estilos.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript"  href="./js/scripts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

</head>
<body>
  
<header>
  <img src="./imagenes/logo.png" id="logo">
</header>
<section>
  <nav class="menu2">
    <menu>
      <li><a href="./">Inicio</a></li>
      <li><a href="./admin.php">Ultimas Compras</a></li>
      <li><a href="#" class="selected">Agregar</a></li>
      <li><a href="./login/cerrar.php">Salir</a></li>
    </menu>
  </nav>

  <center><h1>Reporte de ventas por productos </h1></center>
<form action="plantillag.php" method ="get">
  <fieldset>
    Fecha Inicial <br>
    <input type="date" name="fechai">
  </fieldset>
  <fieldset>
    Fecha Final <br>
    <input type="date" name="fechaf">
  </fieldset>
<input type="submit" name="action" value="Enviar" class="aceptar">
</form>

</section>
</body>
</html>