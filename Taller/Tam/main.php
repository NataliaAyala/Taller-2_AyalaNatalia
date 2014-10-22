<?php
 
ob_start("ob_gzhandler");

//Inicializar una sesion de PHP
session_start();
 
   
    include("includes/database.php");  
    conectarse();

    if ((isset($_SESSION['user_id']))) {
 
    //Llamar datos
    $query = "	SELECT  id,usuario FROM usuarios WHERE id = '".$_SESSION['user_id']."'";         
    $result = mysql_query($query); 
 
    $username = "";
 
    //variable a reemplazar en "usuario"
    if($fila = mysql_fetch_array($result))
    	$username = $fila['usuario'];
	}
 
if(isset($_SESSION['carro'])) 
  $carro=$_SESSION['carro'];else $carro=false; 
  
  //Sacar datos de la tabla de los productos
  $query_productos = "SELECT *FROM tam.lista_carro WHERE 1 order by id";
  $qry=mysql_query($query_productos);


mysql_close($link);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tamcot Videogames | Tienda de Videojuegos </title>
  <!-- Carga el favicon -->
  <link href='favicon.png' rel='shortcut icon' type='image/png'/>
  <link href='favicon.png' rel='icon' type='image/png'/>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <!-- Carga los estilos de Tamcot -->
  <link rel = "stylesheet" href = "css/stylesheet.css">
  <link rel = "stylesheet" href = "css/social-buttons.css">

  <!-- Incluye los archivos de Java -- >
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://codeorigin.jquery.com/jquery.js"></script>
    <!-- Smooth scrolling plugin) -->
    <script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <!-- Include Prefixfree.js--> 
    <script src="js/prefixfree.min.js"></script>  

</head>


<body>	

<!-- Sin inicio de sesión  -->



  <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <a href="main.php"><img src="images/logo.png" width="140" height="68" alt="TAMCOT" class="pull-left logo"></a>
            
            <li class="active">
              <a href="main.php">Inicio</a>
            </li>

              <li>
              <a href="perfil.php">Perfil</a>
            </li>

           
            
          </ul>
        

<!-- Usuario LAdo derecho -->
      <form class="navbar-form navbar-right">
            <div class="form-group">  
       <a href="perfil.php"><?php echo $username//Variable usuario ?></a>
             </div>   
<!-- boton de logout
  del bootstrap -->
            <button type="button" class="btn btn-default btn-sm sesion" alt="cerrar sesion">
              <a href="logout.php"><span class="glyphicon glyphicon-off"></span></a>
            </button>


       

          </form>
        </div>
        <!--/.navbar-collapse -->
      </div>
    </div>
   


 
  
  <!-- CONTENIDO DEL SITIO -->
<!-- Banner -->
<div class="fondoVideos">
  <div class = "videoBanner">
     <a href="javascript:$.scrollTo('500px',800);"> <!-- script para ir directamente a las secciones si se hace clic desde el banner -->
      <figure class="tint"> <br> <br> <br> <br>  
      <img src="images/Lan.jpg">
     <!--  <video id="video1" loop>   
        <source src="http://tamcot.hol.es/MP4/Lanzamientos.mp4" type="video/mp4" />
        <source src="http://tamcot.hol.es/Webm/Lanzamientos.webm" type="video/webm"/>
        <source src="http://tamcot.hol.es/Ogg/Lanzamientos.ogv" type="video/ogg" /></video> -->
        <div class= "lanzamientos tituloVideos"><p>LANZAMIENTOS</p></div>
        <div class="lanzamientostxt textoVideos">
        <ul>
         <li>Batman Arkham Origins</li>
         <li>Battlefield 4</li>
         <li>Assasins Creed: Black Flag...</li>
        </ul> 
    </figure>
  </a>

    <a href="javascript:$.scrollTo('1740px',800);">
      <figure class="tint">
<br> <br> <br> <br> 
     <img src="images/of.jpg">

     <!--  <video id="video2" loop>
        <source src="http://tamcot.hol.es/MP4/Ofertas.mp4" type="video/mp4" />
        <source src="http://tamcot.hol.es/Webm/Ofertas.webm" type="video/webm" />
        <source src="http://tamcot.hol.es/Ogg/Ofertas.ogv" type="video/ogg" />
      </video>  -->
      <div class= "ofertas tituloVideos"><p>OFERTAS</p></div>
      <div class="ofertastxt textoVideos">
        <ul>
         <li>GtaV</li>
         <li>Disney Infinity</li>
         <li>Rocksmith 2014:RIVALS</li>
        </ul> 
      </figure>  
    </a>

    <a href="javascript:$.scrollTo('2357px',800);">
      <figure class="tint">
<br> <br> <br> <br> 
      <img src="images/des.jpg">
      <!-- <video id="video3" loop>
        <source src="http://tamcot.hol.es/MP4/Destacados.mp4" type="video/mp4" />
        <source src="http://tamcot.hol.es/Webm/Destacados.webm" type="video/webm" />
        <source src="http://tamcot.hol.es/Ogg/Destacados.ogv" type="video/ogg" />
      </video> -->
      <div class= "destacados tituloVideos"><p>DESTACADOS</p></div>
      <div class="destacadostxt textoVideos">
        <ul>
         <li>Pokemon X/Y</li>
         <li>The last of Us</li>
         <li>Beyond: Two Souls</li>
        </ul> 
      </figure>
    </a>

    <a href="javascript:$.scrollTo('2973px',800);">
      <figure class="tint">
<br> <br> <br> <br> 
      <img src="images/prev.jpg">
     <!--  <video id="video4" loop>
        <source src="http://tamcot.hol.es/MP4/Preventa.mp4" type="video/mp4" />
        <source src="http://tamcot.hol.es/Webm/Preventa.webm" type="video/webm" />
        <source src="http://tamcot.hol.es/Ogg/Preventa.ogv" type="video/ogg" />
      </video> -->
      <div class= "preventa tituloVideos"> <p>CATÁLOGO</p></div>
      <div class="preventatxt textoVideos">
        <ul>
         <li>WatchDogs</li>
         <li>Call of Duty: Ghosts</li>
         <li>Need for Speed: Rivals</li>
        </ul> 
      </figure>
    </figure>      
    </a>

 </div> 
</div>

<!-- Secciones -->
  <div id= "seccionLanzamientos">
   <div class="container">
      <!-- Lanzamientos -->
      <div class="row">
        <div class="col-xs-1 lanzamientoIcono">
          <img src="images/lanzamientos.png" width="60">
        </div>
        <div class="col-xs-11">
          <h2>Lanzamientos</h2> 
        </div>
      </div>
    </div>
  </div>

  <div class= "Articulos">
    <div class="container">
      <div class="row">
        <div class="col-xs-1">
        </div>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Batman Arkham Origins</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Battlefield 4</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Assasins Creed 4</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Naruto: Ultimate Ninja Storm 3 - Full Burst</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Castlevania: Lords of Shadow - Mirror of Fate HD</h3>
        </div>
        </a>
        <div class="col-xs-1">
        </div>
     </div>
     <div class="row">
        <div class="col-xs-1 atras">
          <a href="#"><img src="images/atras.png" width="40"></a>
        </div>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Lanz1.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Lanz2.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Lanz3.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Lanz4.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Lanz5.jpg" width="140" height="200">
        </div>
        </a>
        <div class="col-xs-1 siguiente">
          <a href="#"><img src="images/siguiente.png" width="40"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-1">
        </div>
        <div class="col-xs-2">
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-1">
        </div>
     </div>
     <div class="row">
        <div class="col-xs-1">
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">Xbox360</h4>
         
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">PS3</h4>
         
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">Xbox360</h4>
        
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
     
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">PC</h4>
        
        </div>
        </div>
        <div class="col-xs-1">
        </div>
     </div>
    </div>
  </div>

  <div id= "battlefield">
   <div class="container">
      <div class="row">
        <div class="col-xs-4 anuncioBattle">
          <h2 id="tituloBattle">BATTLEFIELD 4<br>¡Disponible ahora!</h2>
          <p id="descripcionBattle">Compralo ahora y recibe un 20% de descuento</p>
          <a href="#" class="masInfo">Más info</a>
          <img src="images/caratula.png" alt="battlefield">
        </div>
        <div class="col-md-4 col-md-offset-4 videoBattle">
          <h2 id="tituloBattle">Trailer:</h2>
          <a title="Trailer" href="javascript:void(0);" onclick="window.open('http://www.youtube.com/v/csA9Ie5nXoQ&autoplay=1', 'popup', 'left=260, top=120, width=720, height=480, toolbar=0, resizable=1')"><img src="images/videoBattle.png" alt="battlefieldvideo" title="Ver video" /></a>
        </div>
      </div>
   </div>
  </div>


  <div id= "seccionOfertas">
   <div class="container">
      <!-- Ofertas -->
      <div class="row">
        <div class="col-xs-1 ofertasIcono">
          <img src="images/ofertas.png" width="60">
        </div>
        <div class="col-xs-11">
          <h2>Ofertas</h2> 
        </div>
      </div>
    </div>
  </div>

  <div class= "Articulos">
    <div class="container">
      <div class="row">
        <div class="col-xs-1">
        </div>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">GtaV</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Disney Infinity</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Rocksmith 2014</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Minecraft</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Borderlands 2</h3>
        </div>
        </a>
        <div class="col-xs-1">
        </div>
     </div>
     <div class="row">
        <div class="col-xs-1 atras">
          <a href="#"><img src="images/atras.png" width="40"></a>
        </div>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Ofer1.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Ofer2.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Ofer3.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Ofer4.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Ofer5.jpg" width="140" height="200">
        </div>
        </a>
        <div class="col-xs-1 siguiente">
          <a href="#"><img src="images/siguiente.png" width="40"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-1">
        </div>
        <div class="col-xs-2">
          <h3 class="precio precioDescuento">$145.900</h3>
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio precioDescuento">$145.900</h3>
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio precioDescuento">$145.900</h3>
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio precioDescuento">$145.900</h3>
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio precioDescuento">$145.900</h3>
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-1">
        </div>
     </div>
     <div class="row">
        <div class="col-xs-1">
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">Xbox360</h4>
          
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">Xbox360</h4>
          
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">PS3</h4>
          
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">PC</h4>
          
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">PS3</h4>
          
        </div>
        <div class="col-xs-1">
        </div>
     </div>
    </div>
  </div>


  <div id= "seccionDestacados">
   <div class="container">
      <!-- Destacados -->
      <div class="row">
        <div class="col-xs-1 destacadosIcono">
          <img src="images/destacados.png" width="60">
        </div>
        <div class="col-xs-11">
          <h2>Destacados</h2> 
        </div>
      </div>
    </div>
  </div>

  <div class= "Articulos">
    <div class="container">
      <div class="row">
        <div class="col-xs-1">
        </div>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Pokemon X/Y</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">The last of Us</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Beyond: Two Souls</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">Saint's Row 4</h3>
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <h3 class="tituloJuego">NBA 2K14</h3>
        </div>
        </a>
        <div class="col-xs-1">
        </div>
     </div>
     <div class="row">
        <div class="col-xs-1 atras">
          <a href="#"><img src="images/atras.png" width="40"></a>
        </div>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Desc1.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Desc2.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Desc3.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Desc4.jpg" width="140" height="200">
        </div>
        </a>
        <a href="#">
        <div class="col-xs-2">
          <img src="images/Desc5.jpg" width="140" height="200">
        </div>
        </a>
        <div class="col-xs-1 siguiente">
          <a href="#"><img src="images/siguiente.png" width="40"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-1">
        </div>
        <div class="col-xs-2">
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-2">
          <h3 class="precio">$125.900</h3>
        </div>
        <div class="col-xs-1">
        </div>
     </div>
     <div class="row">
        <div class="col-xs-1">
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">3DS</h4>
         
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">PS3</h4>
         
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">PS3</h4>
         
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">PS3</h4>
         
        </div>
        <div class="col-xs-2">
          <h4 class="fecha">29/09/2014</h4>
          <h4 class="consola">Xbox360</h4>
         
        </div>
        <div class="col-xs-1">
        </div>
     </div>
    </div>
  </div>


  <div id= "seccionPreventa">
   <div class="container">
      <!-- Preventa -->
      <div class="row">
        <div class="col-xs-1 preventaIcono">
          <img src="images/preventa.png" width="60">
        </div>
        <div class="col-xs-11">
          <h2>Catálogo</h2> 
        </div>
      </div>
    </div>
  </div>

  <div class= "Articulos">
    <div class="container">

 <?php   //Basado en el tutorial  http://www.programacionweb.net/articulos/articulo/carro-de-compras-en-php/
          while($row=mysql_fetch_assoc($qry))
          $rows[] = $row;

             $c = 0;
             foreach( $rows as $row ):

            $producto = stripslashes($row['producto']);
            $precio = stripcslashes($row['precio']);
            $url = stripslashes($row['url']);
            $id = $row['id'];

                //Needs Break Boolean, true if counter at second column
                $b = (( ++$c % 5 == 0 ) ? true : false );

                if ( $b ) 
                    echo '<div class="row">';
                  
                    ?>

                   <div class="col-md-3">
              <figure>
                  <img  src="<?php echo $url ?>" alt="Productos">
                </figure>
                <br />
                <?php 

//intento de maquetación de los productos con php
              if(!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador']!=md5($row['id'])){ 

              ?> 
              <a href="agregarCarro.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>"> 
              <img class="agregarCarrito" src="images/adto.png" border="0" title="Agregar al Carrito"></a>

              <?php 
              } 
              else {
                ?>

              <a href="borrarCarro.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>"> 
              <img class="agregarCarrito" src="images/adto2.png" border="0" title="Quitar del Carrito"></a>
              <?php } 

              ?>
              <br />
                <h5 class="precio">$<?php echo $precio ?></h5>
                <br />
                <a href="#"><?php echo $producto ?></a>
                <br />
                   </div>

               <?php

                if ( $b ) 
                    echo '</div>';
              endforeach;

            ?>


  <a href="#" class="scrollup">Scroll</a>
<!-- 
//Espacio manual -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<!-- Footer -->

<div id="footer">
  <div class="container footerCont">
      <div class="row">
        <div class="col-md-3 logofooter">
          <img src="images/logofooter.png" alt="tamcot">
        </div>
        <div class="col-md-3 col-md-offset-1 infofooter">
          <h3 class="titulofooter">Info</h3>
          <ul id="infoContacto">
          <li class="elementofooter">
          <span class="glyphicon glyphicon-briefcase iconofooter">
          </span>
            Tamcot Video Games</li>
          <li class="elementofooter">
            <span class="glyphicon glyphicon-map-marker iconofooter"></span>
            <ul id="infoContactoDirecciones">
            <li>Unicentro (Plazoleta Central)</li>
            <li>Palmetto Plaza (Local 269)</li>
            <li>C.C. Centenario 2do Piso</li>
            </ul>
          </li>
          <li class="elementofooter">
            <span class="glyphicon glyphicon-phone-alt iconofooter"></span>
            379 72 13</li>
          <li class="elementofooter">
            <span class="glyphicon glyphicon-phone iconofooter"></span>
            317 419 83 31</li>
          <li class="elementofooter">
            <span class="glyphicon glyphicon-envelope iconofooter"></span>
            videogames@tamcot.com</li>
          <li class="elementofooter">
            <span class="glyphicon glyphicon-globe iconofooter"></span>
            www.tamcot.com</li>
          </ul>
        </div>
        <div class="col-md-3 col-md-offset-1 siguenos">
          <h3 class="titulofooter">Síguenos</h3>
          <div class="col-md-4">
          <a href="http://www.facebook.com" target="_blank" class="sb circle no-shadow no-border blue large facebook">
          </a>
          </div>
          <div class="col-md-4 ">
          <a href="http://www.pinterest.com" target="_blank" class="sb circle no-shadow no-border red large pinterest">
          </a>
          </div>
          <div class="col-md-4">          
          <a href="http://www.twitter.com" target="_blank" class="sb circle no-shadow no-border blue large twitter">
          </a>
          </div>
        </div>
      </div>
     </div>
  </div>

   

</body>
</html>