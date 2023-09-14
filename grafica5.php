<?php
include("./fusioncharts/integrations/php/fusioncharts-wrapper/fusioncharts.php");

?>
<html>
<head>
<title>Ventas de cliente</title>
<link rel="stylesheet" type="text/css" href="./css/estilos.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript"  href="./js/scripts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.candy.js"></script>
</head>

<header>
	<img src="./imagenes/logo.png" id="logo">
    <nav class="menu2">
	  <menu>
	    <li><a href="./fechag.php">Reportes</a></li>
	    <li><a href="./login/cerrar.php">Salir</a></li>
	  </menu></nav>
	</header>

<section>
<body>
<?php
// Chart Configuration stored in Associative Array
$arrChartConfig = array(
        "chart" => array(
          "caption" => "Productos más vendidos",  // titulo
              "subCaption" => "Empresas", // Subtitulo
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
$Chart = new FusionCharts("column3d", "MyFirstChart" , "700", "400", "chart-container", "json", $jsonEncodedData);

// Render the chart
$Chart->render();
?>
<center>
    <div id="chart-container">Chart will render here!</div>
</center>

</body>
</section>
</html>