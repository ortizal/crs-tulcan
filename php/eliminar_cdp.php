<?php
include ("../conexion/conexion.php");
$id=$_REQUEST['id'];
$actualizar="DELETE FROM ingresos  WHERE ing_id='$id'"; 
$resultado=mysqli_query($conexion,$actualizar) or die(mysqli_error($conexion,$actualizar));
header("Location:index.php");
?>