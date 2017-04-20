<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="596" border="1">
  <tbody>
    <tr>
      <td colspan="4"><h1>Eliminar articulo por nombre </h1></td>
    </tr>
    <tr>
      <td width="156">Articulos en existencia</td>
      <td width="263">Ingrese el Articulo a eliminar</td>
      <td width="101">&nbsp;</td>
      <td width="48">&nbsp;</td>
    </tr>
    <tr>
<?php
include ("conexion.php");
	  
$consulta= "select * from mma";
$resultado=mysqli_query($conexion,$consulta);
?>
      <td> <?php while ($fila=mysqli_fetch_array($resultado)){ echo "<br>".$fila[0]; }?>&nbsp;</td>
      <form action="eliminaart.php" method="POST">
      <td><input type="text" name="eliminar"></td>
      <td><input type="submit" value="Eliminar"/></td>
      <td>&nbsp;</td>
    </form>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>