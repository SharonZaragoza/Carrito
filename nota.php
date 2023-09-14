<?php
session_start();
include"./conexion.php";
?>

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

                </menu>
            </nav>

    <section>
<?php
if($_REQUEST['rechazado']==1){
    ?>
    <center><h1>Lo sentimos</h1></center>
    <center><h2> No hay existencias sefucientes para alfgunos de los productos
    que deseaba comprar</h2></center>

<?php
   }else{
?>

    <center><h1>Gracias por su preferencia</h1></center>

    <?php
} ?>

  
   <center><h1>Su compra</h1></center>

   <table class="colapsado" border="1" width="100%">
   <tr>
   <td>Id</td>
   <td>Nombre</td>
   <td>Precio</td>
   <td>Cantidad</td>
   <td>Subtotal</td>
   </tr>


<?php
include 'conexion.php';
$re=$con->query("select p.id,p.nombre,c.cantidad,c.precio,c.subtotal from productos p
join compras c on p.id=c.idProducto
where c.numeroventa=".$_REQUEST['numventa']." order by c.id")or die(mysql_error());
while ($f=$re->fetch_array()) { 
    echo '<tr>
        <td>'.$f['id'].'</td>
        <td>'.$f['nombre'].'</td>
        <td>'.$f['precio'].'</td>
        <td>'.$f['cantidad'].'</td>
        <td>'.$f['subtotal'].'</td>
    </tr>';
}
?>
</section>
</table>
<center><a href="./index.php" class="aceptar">Volver al Catalogo</a></center>
