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
  background-color: #ADD8FF;

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
    <link rel="stylesheet" type="text/css" href="./css/estilo-nosotros.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js%22%3E</script>
    <script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
    <header>
    
       <blockquote> <img src="./imagenes/logom.PNG" id="logom" width= 217 height=120></blockquote>
       
    </header>
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
    <div class="blue-bg"></div>
<div class="white-bg shadow"></div>
<div class="content">
  <h1>¿Qué ofrece mi página?</h1>
  <p>En nuestra tienda en línea, descubre los títulos que se agregarán a las esperadísimas preventas
         que te llevarán a adentrarte en escenarios desconocidos y aumentar cada vez más tus 
         experiencias; títulos como Halo para Xbox, Mario Bros con nuevas aventuras para Nintendo 
         y Dragon Ball Xenoverse para Play Sation, por mencionar algunos títulos de la increíble gama.</p>

     <h1>¿Cuál es nuestro objetivo?</h1>

  <p>Pasa horas de diversión en el lugar que elijas, algunos títulos de nuestros videojuegos han sido 
      seleccionados como descargables para que los lleves a cualquier lugar. Si quieres conocer lo que 
      está siendo tendencia en videojuegos, en top venta podrás considerar qué títulos podrás adquirir
       y en preventa, tendrás acceso a consultar que estará próximo a llegar, para que tú seas el primero 
       en descubrir y en llegar victorioso a nuevas misiones.</p>

</div>
    </div>
    
  </body>
</html>
