<?php

 //Guia http://gonzasilve.wordpress.com/2012/05/23/autenticacion-de-usuarios-en-php-y-mysql/

include_once("includes/database.php");

$link=Conectarse();
$username = $_POST['username'];
$email = $_POST['correo'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$query = sprintf("SELECT usuario FROM usuarios WHERE usuarios.usuario = '%s'", $username);

$result=mysql_query($query,$link);

if(mysql_num_rows($result)){
		//Muestra un error si ya existe el usuario, y lo redirecciona a la misma p{agina}
	?>
        <form name="formulario" method="post" action="registro.php">
            <input type="hidden" name="status_registro" value="1">
        </form>
	<?php
} else {

	mysql_free_result($result);

	if($pass1!=$pass2) {//Si las contraseñas no coinciden redirecciona a la pagina y muestra dicho error
	
	?>
        <form name="formulario" method="post" action="registro.php">
            <input type="hidden" name="status_registro" value="2">
        </form>
	<?php
	} else {

		$pass_encrypt = md5($pass1);
		$query = sprintf("INSERT INTO usuarios (usuario, correo, password)
		VALUES ('%s', '%s', '%s')", $username, $email, $pass_encrypt);

		$result=mysql_query($query,$link);

		if(mysql_affected_rows()){
			header("Location: index.php");
		} else {
			//Si no exite la fila, muestra dicho error
		?>
	        <form name="formulario" method="post" action="registro.php">
	            <input type="hidden" name="status_registro" value="3">
	        </form>
		<?php
		}
	}
}

?>

<script type="text/javascript"> 
//Envia los errores en forma de javascript
    document.formulario.submit();
</script>