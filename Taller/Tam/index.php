

<!DOCTYPE html>
<html lang="en">

<!-- Puse los links en este estilo (http://127.0.0.1/Tamcot/index.html) para que me funcionaran directamente desde el xammp -->


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
    <!-- Include Prefixfree.js -->
    <script src="js/prefixfree.min.js"></script>  

</head>


<body>  

  <!-- Campos -->


<div class="fondoContactoC">

<section>
 <form action="validarUsuario.php" method="post">  
<div class="row">
    <div class="col-xs-4">
    </div>
    <div class="col-xs-4">
     <a href="#"><img src="images/logo.png" width="200" height="120" alt="TAMCOT" class="regLogo"></a>
  
    <input type="text" class="form-control inputfiltro datosUsuario" name="usuario" placeholder="usuario">
    </input>

 <input type="text" class="form-control inputfiltro datosUsuario" name="password" placeholder="password">
    </input>
   </div>
     <div class="col-xs-4">
        </div>
</div>
<!-- 
   botones -->
    <div class="row">
        <div class="col-xs-4">
        </div>
        <div class="col-xs-4 ">
         
        
        <input class= "btn btn-primary" type="submit" value="Logueáte"> 
         
  <hr>

  <a href="registro.php" >
      
      <input class= "btn btn-primary" value="¿Sin cuenta?"> 
          </a>
 </div>


        <div class="col-xs-4">
        </div>

    </div>
 
  
</div>
        <?php
/*
          //Mostrar errores de validacion de usuario, en caso de que lleguen
        if( isset( $_POST['msg_error'] ) )
        {
          switch( $_POST['msg_error'] )
          {
            case 1:
              ?>
              <script type="text/javascript"> 
                alert("El usuario o password son incorrectos.");
              </script>
              <?php
            break;          
            case 2:
              ?>
              <script type="text/javascript"> 
                alert("La seccion a la que intentaste entrar esta restringida.\n Solo permitida para usuarios registrados.");
              </script>
              <?php       
            break;
                }//Fin switch
            }*/
            ?>

</form>



 


  <a href="#" class="scrollup">Scroll</a>

 
<!-- Footer -->

<div id="foot">
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