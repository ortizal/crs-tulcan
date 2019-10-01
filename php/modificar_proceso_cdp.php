<?php
include ("../conexion/conexion.php");
$id=$_REQUEST['id'];
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
$actualizar="UPDATE ingresos SET ing_Ncontrol='$Ncontrol', ing_fecha='$fecha', ing_hora='$hora', ing_parteP='$parteP', ing_apellidos='$apellidos', ing_nombres='$nombres', ing_sexo='$sexo', ing_cedula='$cedula', ing_nacionalidad='$nacionalidad', ing_causaIn='$causaIn', ing_lugarD='$lugarD', ing_certificadoM='$certificadoM', ing_policiaA='$policiaA', ing_telefono='$telefono', ing_aspR='$asp' WHERE ing_id='$id'"; 
$resultado=mysqli_query($conexion,$actualizar) or die(mysqli_error($conexion,$actualizar));
header("Location:index.php");
?>