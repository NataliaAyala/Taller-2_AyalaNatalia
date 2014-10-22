<?php
 


    //conectar BD
    include("includes/database.php"); 
    
    conectarse();
     
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
  
     
    $query = "SELECT id FROM usuarios
            WHERE usuario = '".$user."'
            AND password = '".$pass."' ";  
    $result = mysql_query($query, $link); 
 
    $user_id = "";
   


    if( $fila=mysql_fetch_array($result) )
    {             
        $user_id = $fila['id'];
        session_start();

       //Creo La variable usuario para qu epueda ser usada, en toda la aplicación
        $_SESSION['user_id'] = $user_id;
?>
        <form name="formulario" method="post" action="main.php">
        <input type="hidden" name="idUsr" value='<?php echo $user_id ?>' />
        </form>
<?php
    }
    else {
      
        echo "error en el nombre o contraseña";
    }
?>
                     
<script type="text/javascript"> 
    //Redireccionar con el formulario creado
    document.formulario.submit();
</script>