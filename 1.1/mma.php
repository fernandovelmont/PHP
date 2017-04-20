<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="827" border="1">
  <tbody>
    <tr>
      <td width="168">&nbsp;</td>
      <td width="404">&nbsp;</td>
      <td width="111">&nbsp;</td>
      <td width="116">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4">LISTA DE PRODUCTOS</td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td>Descripcion</td>
      <td>Precio </td>
      <td>Imagen</td>
    </tr>
<?php
include ("conexion.php");
	  
$consulta= "select * from mma";
$resultado=mysqli_query($conexion,$consulta);
	
while ($fila=mysqli_fetch_array($resultado)){
$nombre=$fila[0];
$descripcion=$fila[1];
$precio=$fila[2];
$imagen=$fila[3];

?>
    <tr>
      <td><?php echo "$nombre" ?></td>
      <td><?php echo "$descripcion" ?></td>
      <td><?php echo "$precio" ?></td>
      <td><img src="<?php echo $imagen; ?>" width="100" height="100"><br></td>
    </tr>
  </tbody>
<?php } ?>
</table>
<p></p>
	
</body>
</html>

