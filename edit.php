<!DOCTYPE html>
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
	<title>Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body style="background-color:#CAD5FF" >
<blockquote>  <img src="./imagenes/logom.PNG" id="logom" width= 217 height=120> </blockquote>
    <section>
    <nav class="menu2">
      <menu>
        <li><a href="fechas.php">Reportes</a></li>
        <li><a href="./entradas.php">Entradas</a></li>
        <li><a href="./admin/agregarproducto.php">Agregar</a></li>
        <li><a href="./login/cerrar.php">Salir</a></li>
      </menu>
    </nav>

<?php
    include "conexion.php";
    $id=$_GET['id'];
	$re=$con->query( "select * from productos where id='$id'")or die(mysql_error());
	while ($f=$re->fetch_array()) {
	
	$id=$f['id'];
	$nombre=$f['nombre'];
	$precio=$f['precio'];
	$estado=$f['estado'];
    }

?>

<center><h1>Actualizar Producto</h1>
<form id="formulario" method="post" action="process.php">
<fildset>ID :<br>
<input type="text" name="eprodid" placeholder="Product ID" 
id="eprodid" value="<?php echo $id;?>"readonly/> 
</fildset>

<fildset>Nombre del producto :<br>
<input type="text" name="eprodname" placeholder="Product Title" 
id="eprodname" value="<?php echo $nombre;?>"/>
</fildset>

<fildset>Precio :<br>
<input Type="text" name="eprecio" placeholder="Precio" 
id="precio" value="<?php echo $precio;?>"/>	
</fildset>

<fildset>Estado :<br>
<select name="estado" id="estado">
<?php 
if($estado == 1){ ?>
<option value=1>Activo</option>
<option value=0>Inactivo</option>
<?php } else { ?>
<option value=1>Activo</option>
<option value=0>Inactivo</option>
<?php } ?>
</select>	
</fildset><br>

<fildset><br>
<center><input type="submit" name="accion" value="Actualizar" class="Actualizar">

</fildset>	
</form></center>
</body>
</html>