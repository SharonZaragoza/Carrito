<?php 
ob_start(); 
include "conexion.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Textos</title>
</head>

<body>

<section>
<center><h1>Productos</h1></center>
    <table border="0px" width="100%">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Existencia</td>
            <td>Estado</td>
        </tr>

		<?php

	$re=$con->query("select * from productos");

	while ($f=$re->fetch_array()){

					echo '<tr>
                        <td>'.$f['id'].'</td>    
                        <td>'.$f['nombre'].'</td>
                        <td>'.$f['precio'].'</td>
                        <td>'.$f['existencia'].'</td>
						<td>'.$f['estado'].'</td>
						</tr>';
	}
	?>
	</table>
</section>
   
</body>
</html>


<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->set_paper(array(0,0,720,1280));
$dompdf->render();
//----------------unicamente si queremos que el archivo se guarde en el sevidor-------------
$pdf = $dompdf->output();
$filename = "ejemplo.pdf";
//Donde guardar el documento
$rutaGuardado = "./archivos/";
//------------------------------------------------------------------------------------------

$dompdf->stream('ficheroEjemplo.pdf',array('Attachment'=>0));
//file_put_contents( $rutaGuardado.$filename, $pdf);

?>