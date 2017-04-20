<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include ("conexion.php");

$x=$_POST['usuario'];
$y=$_POST['nombre'];
$z=$_POST['correo'];
$q=$_POST['contraseña'];
$r=$_POST['concontra'];

if(empty($x) || empty($y) || empty($z) || empty($q)){
	echo nl2br ("<font size=6>Campos vacios\n Ingrese datos</font>");
	include ("registro.php");
} else if ($q==$r){
	echo nl2br ("<font size=6>Datos insertados</font>");
	include ("tienda.html");
	mysqli_query($conexion,"insert into usuarios values('$x','$y','$z','$q')");
}else{
	echo nl2br ("<font size=6>La contraseña no coinside</font>");
	include ("registro.php");
}
	 
?>
</body>
</html>