<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="922" border="1">
  <tbody>
    <tr>
    <form id="form1" name="form1" method="POST" action="">
      <td width="169"><a href="menu.html"><input type="button" value="Regresar al Menu principal"/></a></td>
      <td width="383">&nbsp;</td>
      <td width="106"><h3>Buscar por nombre</h3></td>
      <td width="144"><input type="text" name="buscar"/></td>
      <td width="86"><input type="submit" value="Buscar"/></form></td>
    </tr>
    <tr>
      <td colspan="5" align="center"><h1>LISTA DE PRODUCTOS</h1></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td>Descripcion</td>
      <td>Precio </td>
      <td>Imagen</td>
      <td>Agregar al carrito</td>
    </tr>
<?php
include ("conexion.php");

$consulta= "select * from mma";

 
if (isset($_POST['buscar'])){
$consulta="select * from mma where nombre like '%".$_POST['buscar']."%'";
}

$resultado=mysqli_query($conexion,$consulta); 

while ($fila=mysqli_fetch_array($resultado)){
$nombre=$fila[0];
$descripcion=$fila[1];
$precio=$fila[2];
$imagen=$fila[3];
$agregar='<a href="carrito.php?nombre='.$fila['nombre'].'" title="'.$fila['nombre'].'">Agregar</a>';

?>
    <tr>
      <td><?php echo "$nombre" ?></td>
      <td><?php echo "$descripcion" ?></td>
      <td><?php echo "$precio" ?></td>
      <td><img src="<?php echo $imagen; ?>" width="100" height="100"></td>
      <td><?php echo "$agregar" ?></td>
    </tr>
  </tbody>
<?php } ?>
</table>
	
</body>
</html>

