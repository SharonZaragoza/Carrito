<!DOCTYPE html>
<html lang="es">
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
    <title>Carrito de Compras</title>
    <link rel="stylesheet" type="text/css" href="./css/estiloFormulario.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js%22%3E</script>
    <script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body style="background-color:#CAD5FF" >
    
      <blockquote>  <img src="./imagenes/logom.PNG" id="logom" width= 217 height=120> </blockquote>
       
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
           <li>  <a href="./carritodecompras.php" title="ver carrito de compras"> Ver Carrito </a></li>

                </menu>
            </nav>

	<section>
	<body>
	<form id="formulario" method="post" action="./login/verificar.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Inicia Sesión</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
				<input type="text" id="usuario" name="Usuario" placeholder="usuario" >
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" id="password" name="Password" placeholder="password" >
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<center>

				<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
				<a class="login-link" href="formulario.php" title="Registraru.php" >Registrate</a></center>
				<center><input type="submit" name="aceptar" value="Cancelar" class="aceptar"></center>

			</div>
		</div>
	</div>
</body>
	
	</form>

	</section>
</body>
</html>