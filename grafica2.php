

<?php
include("./fusioncharts/integrations/php/fusioncharts-wrapper/fusioncharts.php");

?>

<html>
<head>
<title>Ventas de productos</title>    
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
</head>
<body>
<?php
// Chart Configuration stored in Associative Array
$arrChartConfig = array(
        "chart" => array(
            "caption" => "Ventas de Productos",  // titulo
            "subCaption" => "De " .$_GET['fechai']." A ".$_GET['fechaf'], // Subtitulo
            "xAxisName" => "Productos", // eje x
            "yAxisName" => "Pesos", // eje y
            "numberSuffix" => "$", // etiqueta numero
            "theme" => "fusion" // tema de la grafica 
        )
    );

include 'conexion.php';
        $re=$con->query("select sum(compras.subtotal) as total,productos.nombre from compras join productos
on compras.idproducto=productos.id where fecha between '".$_GET['fechai']."' and '".$_GET['fechaf']."'
group by productos.id;")or die(mysql_error());
        $arrLabelValueData = array();
while ($f=$re->fetch_array()) {
    // An array of hash objects which stores data
   
        array_push($arrLabelValueData, array(
            "label" => $f['nombre'], "value" => $f['total']
        ));
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
</html>