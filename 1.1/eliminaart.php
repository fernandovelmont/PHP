<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include ("conexion.php");

$x=$_POST['eliminar'];

$consulta= "select * from mma";
$resultado=mysqli_query($conexion,$consulta);

while ($fila=mysqli_fetch_row($resultado)){	
if ($x == $fila[0]){
	$r=0;
	break;
}else{
	$r=1;
}
}

if(empty($x)){
	echo nl2br ("<font size=6>Campo vacio\n Ingrese algun articulo a eliminar</font>");
	include ("eliminar.php");
}else if ($r==0){
	mysqli_query($conexion,"DELETE FROM mma WHERE nombre LIKE '%".$x."%'");
	echo nl2br ("<font size=6>Articulo eliminado con exito</font>");
	include ("eliminar.php");
}else{
	echo nl2br ("<font size=6>Su busqueda no coincide con los articulos</font>");
	include ("eliminar.php");
}

?>
</body>
</html>