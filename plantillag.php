<?php
ob_start();
include "conexion.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Textos</title>
</head>
<body style="background-color:#CAD5FF" >
   <section>
		 <center><h1>Total de gastos producidos por usuario</h1></center>
	<center>	 <table border="0px" width="80%">
			 <tr>
				 <td>Nombre</td>
				 <td>Total $</td>
			</tr>

			<?php
      $re=$con->query("SELECT sum(compras.subtotal) as total, usuarios.nombre FROM compras
join usuarios on compras.idUsuario=usuarios.id
where fecha between '".$_GET['fechai']."'AND'".$_GET ['fechaf']."' group by usuarios.id order by total desc") or die(mysql_error());
while ($f=$re->fetch_array()){
	echo'<tr>
	<td>'.$f['nombre'].'</td>
	<td>'.$f['total'].'</td>
</tr>';
}
			 ?>
			 </table> </center>
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
