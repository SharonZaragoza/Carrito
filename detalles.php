<!DOCTYPE html>
<html lang="es">
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
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body style="background-color:#CAD5FF" >
 <blockquote><img src="./imagenes/logom.PNG"  width= 217 height=120></blockquote>
       
       <nav class="menu2">
           <menu  	>
               <li > <a href  ="./">Inicio</a></li>
                   <?php
                   if(isset($_SESSION['Usuario'])){?>
                       <li><a href="./login/cerrar.php">Cerrar
                           sesión</a></li>
                               <?php
                           } else {?>
                           <li><a href="./login.php">Iniciar sesión</a>
                           </li>
                           <?php
                       }
                       ?>
                   </menu>
               </nav>
			   <center> <h1> DESCRIPCIÓN DE PRODUCTOS </center>
	<?php
		include 'conexion.php';
		$re=$con->query("select * from productos where id=".$_GET['id'])or die(mysql_error());
		while ($f=mysqli_fetch_array($re)) {
		?>
			
				<center><section  style="background: #E8F4FF">
				<img src="./productos/<?php echo $f['imagen'];?>"width= 330 height=450><br>
				<span><?php echo $f['nombre'];?></span><br>
				<span>Precio: <?php echo $f['precio'];?></span><br>
				<span>Cantidad: <?php echo $f['existencia'];?></span><br>
				<a href="./carritodecompras.php?id=<?php  echo $f['id'];?>">Añadir al carrito de compras</a>
				<center><a href="index.php" class="aceptar" title="index.php" >Regresar</a></center>
		</section> </center>
		
	<?php
		}
	?>
	>
</body>
</html>