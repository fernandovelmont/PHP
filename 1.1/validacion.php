<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

include ("conexion.php");
	
$x=$_POST['usr'];
$y=$_POST['psw'];

$consulta= "select * from $db_nombre.usuarios";
$resultado=mysqli_query($conexion,$consulta);
	
while ($fila=mysqli_fetch_row($resultado)){	

if ($x==$fila[0] && $y==$fila[3]){
	$r=0;
	break;
}else{
	$r=1;
	}	
}

if ($r==0){
	include ("menu.html");
}else{
	echo nl2br ("<font size=6>Usuario o contraseña incorrecta</font>");
	include ("acceso.php");
}
?>
</body>
</html>