<?php
include("./fusioncharts/integrations/php/fusioncharts-wrapper/fusioncharts.php");

?>
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

<title>Ventas de cliente</title>
<link rel="stylesheet" type="text/css" href="./css/estilos.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript"  href="./js/scripts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.candy.js"></script>
</head>


<body style="background-color:#CAD5FF" >
    
      <blockquote>  <img src="./imagenes/logom.PNG" id="logom" width= 217 height=120> </blockquote>
       <section>

    <nav class="menu2">
        <menu  	>
                
                        <li><a href="./">Volver</a>
                        </li>

                        
                </menu>
            </nav>
<?php
// Chart Configuration stored in Associative Array
$arrChartConfig = array(
        "chart" => array(
          "caption" => "Videojuegos mas comprados",  // titulo
              "subCaption" => "Cantidad", // Subtitulo
              "xAxisName" => "Productos", // eje x
              "yAxisName" => "Cantidad", // eje y
              "numberSuffix" => "Pz", // etiqueta numero
              "theme" => "candy" // tema de la grafica

        )
    );

include 'conexion.php';
$re=$con->query("SELECT sum(compras.cantidad) as total, productos.nombre FROM compras
  join productos on compras.idProducto=productos.id group by productos.id order by total limit 5") or die(mysql_error());

$arrLabelValueData = array();

while ($f=mysqli_fetch_array($re)) {
array_push($arrLabelValueData, array("label" =>$f['nombre'], "value" => $f['total']));
}


$arrChartConfig["data"] = $arrLabelValueData;

// JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
$jsonEncodedData = json_encode($arrChartConfig);

// chart object
$Chart = new FusionCharts("doughnut3d", "MyFirstChart" , "700", "400", "chart-container", "json", $jsonEncodedData);

// Render the chart
$Chart->render();
?>
<center>
    <div id="chart-container">Chart will render here!</div>
</center>
<center><h1>Reporte PDF de ventas por productos </h1></center>
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
</center>
</body>
</section>
</html>