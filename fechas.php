<html>
<head>
<style type="text/css">
	menu:after , menu:before {
  display : block;
  content : ' ';
}

menu:after {
  clear : both;
}

li {
  list-style-type : none;


  float   : left;
  cursor  : pointer;
  padding : 3px 10px;


}
li:first-child {
  border-radius : 5px 0 0 5px;
}

li:last-child {
  border-radius : 0 5px 5px 0;
}

li a {
  display : block;
  padding : 10px 13px;
  font-size : 26px;
  text-decoration : none;
  border-radius   : 5px;
  position        : relative;
  top   : 0;
  color : #FFF;			
  transition : all .4s;
}

li:hover a {
  top   : -20px;
  color : #4ba3f1;
  background-color: #fff;
  box-shadow : 0 0 5px 0 rgba(255, 255, 255, 0.7);
  transition : all .4s;
}

li a:after {
  display  : block;
  content  : '';
  position : absolute;
  top  : 100%;
  left : 42%;
  border-style : solid;
  border-color : transparent;
  border-width : 5px 5px 0 5px;
  transition   : all .4s;
}

li:hover a:after {
  border-color : white transparent transparent transparent;
  transition   : all .4s;
}

    .menu2 a {
  font-family : georgia;
  font-size   : 14px;
  font-style  : italic;
  text-transform : capitalize;
}

.menu2 li {
  border-right  : 1px solid rgba(200,200,255,0.5);
  border-left   : 1px solid rgba(40,40,40,0.2); 
  background-color: #51A1E6;

}

.selected {
  top   : -20px;
  color : #4eacff;
  background-color: #fff;
  box-shadow : 0 0 5px 0 rgba(255, 255, 255, 0.7);
  transition : all .4s;
}

.selected:after {
  border-color : white transparent transparent transparent;
  transition   : all .4s;
}
nav {
  width  : 35%;
  position: absolute;
  z-index: 3;
  left: 18%;
  top:.5%;
}

    table.colapsado {border-collapse: collapse;}
   
    </style>

  <meta charset="utf-8"/>
  <title>Carrito de Compras</title>
  <link rel="stylesheet" type="text/css" href="./css/estiloFormulario.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript"  href="./js/scripts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

</head>
<body style="background-color:#CAD5FF" >
<header>
  <img src="./imagenes/logom.png" id="logo"width= 217 height=120>
</header>
<section>
  <nav class="menu2">
    <menu>
      <li><a href="./admin.php">Lista de Productos</a></li>
      <li><a href="./admin/agregarproducto.php" >Agregar</a></li>
      <li><a href="./login/cerrar.php">Salir</a></li>
    </menu>
  </nav>


<center><h1>Reporte de ventas por Usuario</h1></center>
<form action="graficaphp.php" method ="get">
  <fieldset>
    Fecha Inicial <br>
    <input type="date" name="fechai">
  </fieldset>
  <fieldset>
    Fecha Final <br>
    <input type="date" name="fechaf">
  </fieldset>
<center>  <input type="submit" name="action" value="Enviar" class="aceptar"></center>
</form>

<center><h1>Reporte de ventas PDF</h1></center>
<form action="plantillap.php" method ="get">
  <fieldset>
    Fecha Inicial <br>
    <input type="date" name="fechai">
  </fieldset>
  <fieldset>
    Fecha Final <br>
    <input type="date" name="fechaf">
  </fieldset>
<center><input type="submit" name="action" value="Enviar" class="aceptar"></center>
</form>
</section>
</body>
</html>