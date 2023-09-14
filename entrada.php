<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Formulario de registro</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>

<section>
	<form id="formularioe" method="post" action="registrarentrada.php">
	<?php
    session_start();
    include 'conexion.php';
    $re=$con->query("select id, nombre from productos where estado=1")or die(mysql_error());
    ?>
   
		<label for="Producto">Producto</label><br>  
        <select name="Producto" >
        <?php
        while ($f=$re->fetch_array()) {?>
        <option value="<?php echo $f['id'];?>">
        <?php echo $f['nombre'];?></option>
        <?php
        }
        ?>      
        </select>
        <br>
        
        <label for="Precio">Precio</label><br>
		<input type="text" id="precio" name="precio" placeholder="Precio"><br>

        <label for="Cantidad">Cantidad</label><br>
        <input type="text" id="cantidad" name="cantidad" placeholder="Cantidad"><br>

        <label for="fecha">Fecha de Compra</label><br>
        <input type="date" id="fecha" name="fecha"><br>

        <input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	</section>
</body>
</html>