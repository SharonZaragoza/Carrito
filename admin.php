<?php
session_start();
    include "conexion.php";
    if(isset($_SESSION['Usuario'])){

    }else{
        header("Location: ./login.php?Error=Acceso denegado");
    }
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
    <title>Panel de Administración</title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript"  href="./js/scripts.js"></script>
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

    <center><h1>LISTA DE PRODUCTOS</h1></center>
    <center><h1>\--------------------------------/</h1></center>

    <font face="Arial" size="4"><table border="0px" width="100%">
        <tr>
            <td>Id</td>
            <td>Imagen</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Existencia</td>
            <td>Reorden</td>
            <td>Estado</td>
            <td>Acciones</td>
        </tr>

		<?php
            $re=$con->query("select * from productos") or die (mysql_error());
            $numeroventa=0;
            while ($f=$re->fetch_array()) {
                $id=$f['id'];
                    echo '<tr>
                        <td>'.$f['id'].'</td>
                        <td><img src="./productos/'.$f['imagen'].'" width="100px" heigth="100px" /></td>
                        <td>'.$f['nombre'].'</td>
                        <td>'.$f['precio'].'</td>
                        <td>'.$f['existencia'].'</td>
                        <td>'.$f['reorden'].'</td>
                        <td>'.$f['estado'].'</td>';
                        echo "<td><a href='edit.php?id=$id'
                        id='popedit'>Editar</a></td>";
                        {
                            if ($f['existencia']<= $f['reorden'] & $f['existencia']>0)
                            echo'<td><img src="./productos/warning1.png" width="100px" heigth="100px" /></td>';
                        }
                        if ($f['existencia']==0)
                        {
                            echo'<td><img src="./productos/warning1.png" width="100px" heigth="100px" /></td>';
                        }
                        echo'
                    </tr>';
            }
        ?>
    </table>
    </section>
</body>
</html>