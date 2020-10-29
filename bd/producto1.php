<?php
$a=$_GET['clave_pro'];
$b=$_GET['claves'];
$c=$_GET['nombres'];
$d=$_GET['precio'];
$e=$_GET['des'];
$conexion=mysqli_connect("localhost","root","root") or die ("Error e la conexion");
mysqli_select_db($conexion,"base") or die ("Error en la base de datos");
$sql=" insert into producto (Producto_id, Clave_pro, Producto, Precio, Descripcion) values ('$a', '$b', '$c', '$d', '$e') ";
mysqli_query($conexion,$sql) or die ("Error de SQL");
mysqli_close($conexion);
echo "los datos se insertaron";
?>

