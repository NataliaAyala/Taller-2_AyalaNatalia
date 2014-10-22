<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tamcot Videogames | Tienda de Videojuegos y Accesorios</title>
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

  
<div class="fondoContactoV">

   
<section>
<form action="guardarRegistro.php" method="post">
<div class="row">
    <div class="col-xs-4">
    </div>
    <div class="col-xs-4">
     <a href="index.php"><img src="images/logo.png" width="200" height="140" alt="TAMCOT" class="regLogo"></a>
     

    <input type="text" class="form-control inputfiltro datosUsuario" name="username" required placeholder="usuario" >
    </input>
    <input type="text" class="form-control inputfiltro datosUsuario" name="email" required placeholder="correo">
    </input>

 <input type="text" class="form-control inputfiltro datosUsuario" name="pass1" required placeholder="password">
    </input>

    <input type="text" class="form-control inputfiltro datosUsuario" name="pass2" required placeholder="repite password">
    </input>

    </div>
     <div class="col-xs-4">
        </div>
    </div>

   
    <div class="row">
        <div class="col-xs-4">
        </div>
        <div class="col-xs-2">
         
       <!--  <div id="bot"> -->
       <input class= "btn btn-primary" type="submit" value="Registro"> 
       
          <!--  </div> -->
        </div>
        <div class="col-xs-6">

    <a href="index.php" >
      
      <input class= "btn btn-primary" value="login"> 
          </a>

        </div>

    </div>
    </div>

   </div>
  




 
</div>

</form>
</section>

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