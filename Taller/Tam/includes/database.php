<?php 
function conectarse(){
if (!($link=mysql_connect("127.0.0.1", "root", ""))) {
			echo "Error en la conexion.";
exit();
}

if (!mysql_select_db("tam",$link)){
	echo "Error al seleccionar la base.";
			exit();
	}
return $link;
	}

$link = conectarse();
	
?>