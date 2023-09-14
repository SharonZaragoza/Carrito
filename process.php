<!DOCTYPE html>
<html>
<head>
<title>Formulario para actualizar productos | Ejemplo</title>
</head>
<style type="text/css">
body{
	background:#3B5998;
	}
</style>
<body>
<?php
	include 'conexion.php';
	function edit_product($id,$nombre,$precio,$estado){
		global $con;
	
	if($con->query("update productos set id='$id', nombre='$nombre',precio='$precio',estado='$estado' where id='$id'")){
	echo "<script language='javascript'>
		alert('PRODUCTO ACTUALIZADO SATISFACTORIAMENTE');
		window.location = 'admin.php';
		</script>";
}
	else{
	echo "<script language='javascript'>
		alert('Error no se pudo actualizar');
		window.location = 'edit.php';
		</script>";	
		}
}

	if(isset($_POST['eprodid'],$_POST['eprodname'],$_POST['eprecio'],$_POST['estado'])){
	$id=$_POST['eprodid'];
	$nombre=$_POST['eprodname'];
	$precio=$_POST['eprecio'];
	$estado=$_POST['estado'];
	edit_product($id,$nombre,$precio,$estado);
}
?>
</body>
</html>