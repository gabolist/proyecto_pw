<?php
require 'conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
	$user = $_POST['txtUsuario'];

	$SQL="insert into usuario(usua) values ('$user')";
	$rs=mysql_query($SQL);
	if($rs){
		echo "Registro OK";
	}
}
?>

<html>
	<head>
		<title>Inicio Sesion</title>
	<link href="login-box.css" rel="stylesheet" type="text/css" />
	</head>

	
<body background="imagenes/estadio.jpg">>

<div style="padding: 200px 0 0 400px;">

<div id="login-box">

<H2>Inicio de sesi�n</H2>
Ingresa tu usuario y contrase�a.
<br />
<br />
<form action="administrar.php" method="post">
	<div id="login-box-name" style="margin-top:20px;">
	Usuario:</div>
		<div id="login-box-field" style="margin-top:20px;">
			<input type="text" name="txtUsuario" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
	<div id="login-box-name">
	Contrase�a:</div>
		<div id="login-box-field">
			<input name="txtContrasena" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
<br />
<span class="login-box-options">
	<input type="checkbox" name="1" value="1"> Remember Me <a href="#" style="margin-left:30px;">Olvidaste la contrase�a?</a></span>
<br />
<br />

	<div id="btnEntrar">
		<input  class="btnEntrar" type="submit" value="Entrar" >
	</div>
</div>

</div>
	</form>
</body>
	
	
	
	
	
	
	
</html>

