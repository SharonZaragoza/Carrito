<?php
include "./conexion.php";

            $con->query("insert into entradas (idProducto,precio,cantidad,fecha) values(
                '".$_REQUEST['Producto']."',
                '".$_REQUEST['precio']."',
                '".$_REQUEST['cantidad']."',
                '".$_REQUEST['fecha']."')");


        header("Location: ./entrada.php");
?>