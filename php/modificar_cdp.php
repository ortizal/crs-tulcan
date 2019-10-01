<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index.css">

    <title>Registros CDP-Tulcan</title>
</head>
<body>
    <header>CDP-REGISTROS</header>
    <nav>INGRESOS Y SALIDAS </nav>
    <section>
        <?php 
        $id=$_REQUEST['id'];
        include ("../conexion/conexion.php");
        $query= "SELECT * FROM ingresos WHERE ing_id='$id'";
        $vista = $conexion->query($query);
        $row=$vista->fetch_assoc();
        ?>
    <form action="modificar_proceso_cdp.php?id=<?php echo $row['ing_id']?>" method="POST">
        <fieldset>
            <legend>INGRESO DE DATOS</legend>
            <table>
                <tr>
                    <th>N°Ingreso <input type="text"  name="txt_Ningreso" value ="<?php echo $row['ing_Ncontrol']?>"></th>
                    <th>Fecha  <input type="date"  name="txt_fecha" value ="<?php echo $row['ing_fecha']?>"> </th>
                    <th>Hora  <input type="time"  name="txt_hora" value ="<?php echo $row['ing_hora']?>"> </th>
                    <th>Parte policial  <input type="text"  name="txt_parteP" value ="<?php echo $row['ing_parteP']?>"> </th>
                    <th>Nombres  <input type="text"  name="txt_nombres" value ="<?php echo $row['ing_apellidos']?>"> </th>
                </tr>
                <tr>
                    <th>Apellidos  <input type="text"  name="txt_apellidos" value ="<?php echo $row['ing_nombres']?>"> </th>
                    <th>Sexo  <input type="text"  name="txt_sexo" value ="<?php echo $row['ing_sexo']?>"> </th>
                    <th>Cedula  <input type="text"  name="txt_cedula" value ="<?php echo $row['ing_cedula']?>"> </th>
                    <th>Nacionalidad  <input type="text"  name="txt_nacionalidad" value ="<?php echo $row['ing_nacionalidad']?>"> </th>
                    <th>Causa investigacion  <input type="text"  name="txt_causaIn" value ="<?php echo $row['ing_causaIn']?>"> </th>
                </tr>
                <tr>
                    <th>Lugar de detencion  <input type="text"  name="txt_lugarD" value ="<?php echo $row['ing_lugarD']?>"> </th>
                    <th>Certificado medico  <input type="text"  name="txt_certificadoM" value ="<?php echo $row['ing_certificadoM']?>"> </th>
                    <th>Policia a cargo  <input type="text"  name="txt_policiaA" value ="<?php echo $row['ing_policiaA']?>"> </th>
                    <th>Telefono  <input type="text"  name="txt_telefono" value ="<?php echo $row['ing_telefono']?>"> </th>
                    <th>ASP responsable  <input type="text"  name="txt_aps" value ="<?php echo $row['ing_aspR']?>"> </th>
                </tr>                
            </table>
            <button type="submit">Actualizar</button> 
        </fieldset>
    </form>
    </section>
</body>
</html>