<?php
$cn_control = mysql_connect("localhost","root","");
if(!$cn_control){
	die('Error en la conexi�n: '.mysql_error());
}

if(!mysql_select_db("bd_bsc")){
	die("No existe la BD");
}
?>
