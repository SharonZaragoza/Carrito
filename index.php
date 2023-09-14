<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<style type="text/css">
  
  .menu2 li {
    border-right  : 1px solid rgba(200,200,255,0.5);
    border-left   : 1px solid rgba(40,40,40,0.2); 
    background-color: #51A1E6;
  
  }
</style>  
    <meta charset="utf-8"/>
    <title>Carrito de Compras</title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js%22%3E</script>
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
              <li>  <a href="./carritodecompras.php" title="ver carrito de compras"> Ver Carrito </a></li>
   
                   </menu>
               </nav>
               <center> <h1> VIDEOJUEGOS DISPONIBLES </center>

    <?php
    include 'conexion.php';
    $re=$con->query("select * from productos where estado=1")or die(mysql_error());
        while ($f=$re->fetch_array()) {
        ?>
            <div class="producto">
            <center>
                <?php
                if($f['existencia']>0){
                ?>
                <img src="./productos/<?php echo $f['imagen'];?>"><br>
                <span><?php echo $f['nombre'];?></span><br>
                <a href="./detalles.php?id=<?php  echo $f['id'];?>">ver</a>
                <?php
                }
        else { ?>
            <img style="position:absolute; opacity:0.5;" src="./productos/agot.png?>">
            <img src="./productos/<?php echo $f['imagen'];?>"><br>
            <span><?php echo $f['nombre'];?></span><br>
            <p>Agotado</p>
                <?php
            }
            ?>
          
            </center>
         </div> 
        <?php
        }
