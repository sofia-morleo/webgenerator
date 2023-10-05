<?php

$nom=$_GET['dom'];

shell_exec("zip -r $nom.zip $nom");
echo "Archivo comprimido";

header("Refresh: 1; URL='http://mattprofe.com.ar:81/alumno/11991/ACTIVIDADES/CLASE_11/webgenerator/'");
	exit;
?>