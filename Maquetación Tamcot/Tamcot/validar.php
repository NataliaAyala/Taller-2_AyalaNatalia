<?php
 //Guia http://gonzasilve.wordpress.com/2012/05/23/autenticacion-de-usuarios-en-php-y-mysql/

include("database.php");
conectarse();
 
$user = $_POST['usuario'];
$pass = $_POST['password'];

$pass_encrypt = md5($pass);//Variable que guarda el password, encriptado (opcional)

$query = "SELECT id FROM usuarios WHERE usuario = '".$user."  AND password = '".$pass_encrypt."' ";  
$result = mysql_query($query, $link); 

$user_id = "";
 
//Si existe alguna fila
if( $fila=mysql_fetch_array($result) )
{       
    //entonces obtiene el id, inicia la sesión 
    //y crea una variable nueva para guardar el id de ususario      
    $user_id = $fila['id'];
    session_start();
   $_SESSION['user_id'] = $user_id;
   
    
?>

<form name="formulario" method="post" action="main.php">
    <input type="hidden" name="idUsr" value='<?php echo $user_id ?>' />
</form>

<?php
    }
    else {
        //Si no exite la fila, muestra dicho error
?>
        <form name="formulario" method="post" action="index.php">
            <input type="hidden" name="msg_error" value="1">
        </form>
<?php
    }
?>
                     
<script type="text/javascript"> 
//Envia los errores en forma de javascript
    document.formulario.submit();
</script>