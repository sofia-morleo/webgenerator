<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrarte es simple</title>
</head>
<body>
	<h2>Registrarse</h2>
<form action='register.php' method='POST'>
	
<p>Email: <input type='text' name='email' ></p>
<p>Contraseña: <input type='text' name='contra'></p>
<p>Repetir contraseña: <input type='text' name='repcontra'></p>

<p><input type='submit' name='boton' value='Ingresar'>
	
<?php
if (isset($_POST['boton'])) {

	if($_POST['contra'] == $_POST['repcontra']){
		$con= mysqli_connect("localhost", "adm_webgenerator", "webgenerator2020", "webgenerator");

		$email=$_POST['email'];
		$contrase=$_POST['contra'];

		$ssql = "SELECT * FROM `usuarios` WHERE `email` = '$email'";
		$res = mysqli_query($con, $ssql);
   		
		if (mysqli_num_rows($res) > 0) {
				echo"Email ya usado"; 
		}
		else{
			
			$ssql ="INSERT INTO `usuarios` (`email`, `password`) VALUES ('$email', '$contrase')";
			$respu = mysqli_query($con, $ssql);

			echo "<h4>Se creo el usuario</h4>";
			header("Refresh: 2; URL=login.php");
			exit;

		}
	}
	else{
		echo"<h4>Contraseñas Diferentes</h4>";
	}
}



?>

</body>
</html>