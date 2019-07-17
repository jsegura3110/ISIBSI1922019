<?php 
	$host = "localhost";
	$basededatos = "formulario";
	$usuariodb = "root"; 
	$clavedb = "";

	//La tabla de la BD
	$tabla1_db = "datos";
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

	if ($conexion ->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}
?>