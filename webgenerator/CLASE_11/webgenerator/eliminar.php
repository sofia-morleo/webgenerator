<?php
session_start();

$nom=$_GET['dom'];
$idweb=$_GET['id'];
shell_exec("rm -r $nom");

$con= mysqli_connect("localhost", "adm_webgenerator", "webgenerator2020", "webgenerator");
$ssql = "DELETE FROM webs WHERE `webs`.`idWeb` = $idweb";
$res = mysqli_query($con, $ssql);
if ($res) {
	echo "<br><center><h2>Eliminado</h2>";
	echo "<br><a href='panel.php'>Ir para atras</a></center>";
}
else{
	echo"No se pudo eliminar";
}

?>