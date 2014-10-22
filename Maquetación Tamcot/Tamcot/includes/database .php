<?php 
function conectarse(){
if (!($link=mysql_connect("localhost", "root", ""))) {
			echo "Error en la conexion .";
exit();
}

if (!mysql_select_db("tienda",$link)){
	echo "Error al seleccionar la base.";
			exit();
	}
return $link;
	}

$link = conectarse();
	
?>