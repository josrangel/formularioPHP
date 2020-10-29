<?php
$a=$_POST['clave'];
$b=$_POST['nombre'];
$conexion=mysqli_connect("localhost","root","root") or die ("Error e la conexion");
mysqli_select_db($conexion,"base") or die ("Error en la base de datos");
$sql="insert into proveedor (Clave_pro, Nombre) values ('$a', '$b') ";
mysqli_query($conexion,$sql) or die ("Error de SQL");
mysqli_close($conexion);
echo "los datos se insertaron";
?>

