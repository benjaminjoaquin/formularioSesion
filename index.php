<?php
session_start();// variable de sesion
if (!isset($_SESSION['nombre'])) {
	header('location: login.php');// tambien hace un direccionamiento hacia una pagina.
}else{
	$usuacrioactivo=$_SESSION['nombre'];
	$idusuario=$_SESSION['id'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina principal del Login</title>
</head>
<body bgcolor="green">
	<h1 align="center">
		Pagina principal de Login
	</h1>

	<h2>Bienvenido: <?php echo $usuacrioactivo."...ID->...".$idusuario." - ".$_SESSION['ap']; ?>
	<a href="cerrar.php"> Cerrar Sesion </a></h2>
</body>
</html>













