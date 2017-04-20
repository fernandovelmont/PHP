<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>Agregado al carrito</p>
<p>Productos hasta el momento</p>

 <?php
if(isset($_GET['nombre'])){
echo "Producto: ".$_GET['nombre'];
}

?>
</p>
</body>
</html>