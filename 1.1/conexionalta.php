<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include ("conexion.php");
	
$x=$_POST['nombre'];
$y=$_POST['descripcion'];
$z=$_POST['costo'];
$q=$_POST['imagen'];

echo nl2br ("<font size=6>Articulo insertado con exito</font>");
include ("articulos.html");
mysqli_query($conexion,"insert into mma values('$x','$y','$z','$q')");

?>
</body>
</html>