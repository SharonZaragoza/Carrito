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

$columnChart = new FusionCharts("column2d", "ex1", "80%", 400, "chart-1", "json", '{
  "chart": {
    "caption": "Countries With Most Oil Reserves [2017-18]",
    "subcaption": "Martínez Bravo Cristian Alberto",
    "xaxisname": "Country",
    "yaxisname": "Reserves (MMbbl)",
    "numbersuffix": "K",
    "theme": "fusion"
  },
  "data": [
    {
      "label": "Venezuela",
      "value": "290"
    },
    {
      "label": "Saudi",
      "value": "260"
    },
    {
      "label": "Canada",
      "value": "180"
    },
    {
      "label": "Iran",
      "value": "140"
    },
    {
      "label": "Russia",
      "value": "115"
    },
    {
      "label": "UAE",
      "value": "100"
    },
    {
      "label": "US",
      "value": "30"
    },
    {
      "label": "China",
      "value": "30"
    }
  ]
}');

$columnChart->render();
?>
<center>
        <div id="chart-1">Chart will render here!</div>
    </center>

</body>
</html>