<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Formulario de registro</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	
<section>
	<form id="formulariou" method="post" action="registraru.php">
		
		<label for="nombre">Nombre</label><br>
		<input type="text" id="nombre" name="nombre" placeholder="Nombre" ><br>
		
		<label for="apellido">Apellido</label><br>
		<input type="text" id="apellido" name="apellido" placeholder="Apellido" ><br>
<input type="radio" id="male" name="sexo" value="M">
        <label for="male">Masculino</label><br>
        <input type="radio" id="female" name="sexo" value="F">
        <label for="female">Femenino</label><br>
        <input type="radio" id="other" name="sexo" value="O">
        <label for="other">Other</label><br>
        
<label for="pais">Pais</label><br>
		<input type="text" id="pais" name="pais" placeholder="pais" ><br>
        
        <label for="fecha">Fecha de Nacimiento</label><br>
		<input type="date" id="fechan" name="fechan" ><br>
		<label for="usuario">Usuario</label><br>
		<input type="text" id="usuario" name="Usuario" placeholder="usuario" ><br>
		
		<label for="password">Password</label><br>
		<input type="password" id="password" name="Password" placeholder="password" ><br>



		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	</section>
	
</body>
</html>