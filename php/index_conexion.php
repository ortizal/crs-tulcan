<?php
include ("../conexion/conexion.php");
$Ncontrol = $_POST['txt_Ningreso'];
$fecha = $_POST['txt_fecha'];
$hora = $_POST['txt_hora'];
$parteP = $_POST['txt_parteP'];
$apellidos = $_POST['txt_apellidos'];
$nombres = $_POST['txt_nombres'];
$sexo = $_POST['txt_sexo'];
$cedula = $_POST['txt_cedula'];
$nacionalidad = $_POST['txt_nacionalidad'];
$causaIn = $_POST['txt_causaIn'];
$lugarD = $_POST['txt_lugarD'];
$certificadoM = $_POST['txt_certificadoM'];
$policiaA = $_POST['txt_policiaA'];
$telefono = $_POST['txt_telefono'];
$asp = $_POST['txt_aps'];
$ingreso="INSERT INTO ingresos(ing_Ncontrol, ing_fecha, ing_hora, ing_parteP, ing_apellidos, ing_nombres, ing_sexo, ing_cedula, ing_nacionalidad, ing_causaIn, ing_lugarD, ing_certificadoM, ing_policiaA, ing_telefono, ing_aspR)
 VALUES ('$Ncontrol','$fecha','$hora','$parteP','$apellidos','$nombres','$sexo','$cedula','$nacionalidad','$causaIn','$lugarD','$certificadoM','$policiaA','$telefono','$asp')"; 
$resultado=mysqli_query($conexion,$ingreso) or die(mysqli_error($conexion,$ingreso));
header("Location:index.php");
?>