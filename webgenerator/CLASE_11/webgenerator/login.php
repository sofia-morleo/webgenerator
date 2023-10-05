<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>webgenerator Sofia Morleo</title>
</head>
<body>
	<h2>Iniciar Sesion</h2>
<form action='login.php' method='POST'>
	
<p>Email: <input type='text' name='email' ></p>
<p>Contraseña: <input type='text' name='contra'></p>
<a href="register.php">Registrarse</a>
<p><input type='submit' name='boton' value='Ingresar'>


<?php

if (isset($_POST['boton'])) {
$con= mysqli_connect("localhost", "adm_webgenerator", "webgenerator2020", "webgenerator");

$email=$_POST['email'];
$contrase=$_POST['contra'];

$ssql = "SELECT * FROM `usuarios` WHERE `email` = '$email' AND `password` = '$contrase' ";
$res = mysqli_query($con, $ssql);

if (mysqli_num_rows($res) > 0) {
	echo"<h4>Se inicio sesion</h4>";
	header("Refresh: 2; URL=panel.php");//redireccionar a panel.php  y que espere 3 segundos
	exit;
}
else{
	echo "<h4>Email o Contraseña Incorrecta</h4>";
	
}
	
}



?>
</body>
</html>