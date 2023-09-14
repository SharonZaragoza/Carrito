<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Formulario de registro</title>
	<link rel="stylesheet" type="text/css" href="./css/estiloFormulario.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	
<section>
	<form id="formularioe" method="post" action="registraentrada.php">
	<?php
	session_start();
	include 'conexion.php';
			
	$re=$con->query("select id, nombre from productos where estado=1")or die(mysql_error());

		?>

		<label for="Producto">Producto</label><br>
		<select name="Producto"> 
			<?php
			while ($f=$re->fetch_array()) { ?>
			<option value="<?php echo $f['id'];?>"><?php echo $f['nombre'];?></option>
			<?php
				}
			 ?></select><br>
				

		<label for="precio">Precio</label><br>
		<input type="text" id="precio" name="precio" placeholder="precio" ><br>

	
        
	<label for="cantidad">Cantidad</label><br>
		<input type="text" id="cantidad" name="cantidad" placeholder="cantidad" ><br>
        
        <label for="fecha">Fecha de Compra</label><br>
		<input type="date" id="fecha" name="fecha" ><br>

		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	</section>
	
</body>
</html>