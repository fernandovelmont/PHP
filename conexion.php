<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
		
$db_host="localhost";
$db_nombre="tienda";
$db_usuario="root";
$db_pass="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);

if(mysqli_connect_errno($db_nombre)){
	//echo "Conexion Fallida";
	echo mysqli_error($conexion);
}else{
	//echo "Conexion Exitosa";
}
	?>
</body>
</html>