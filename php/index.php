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
    <form action="index_conexion.php" method="POST">
        <fieldset>
            <legend>INGRESO DE DATOS</legend>
            <table>
                <tr>
                    <th>N°Ingreso <input type="text"  name="txt_Ningreso"></th>
                    <th>Fecha  <input type="date"  name="txt_fecha"> </th>
                    <th>Hora  <input type="time"  name="txt_hora"> </th>
                    <th>Parte policial  <input type="text"  name="txt_parteP"> </th>
                    <th>Nombres  <input type="text"  name="txt_nombres"> </th>
                </tr>
                <tr>
                    <th>Apellidos  <input type="text"  name="txt_apellidos"> </th>
                    <th>Sexo  <input type="text"  name="txt_sexo"> </th>
                    <th>Cedula  <input type="text"  name="txt_cedula"> </th>
                    <th>Nacionalidad  <input type="text"  name="txt_nacionalidad"> </th>
                    <th>Causa investigacion  <input type="text"  name="txt_causaIn"> </th>
                </tr>
                <tr>
                    <th>Lugar de detencion  <input type="text"  name="txt_lugarD"> </th>
                    <th>Certificado medico  <input type="text"  name="txt_certificadoM"> </th>
                    <th>Policia a cargo  <input type="text"  name="txt_policiaA"> </th>
                    <th>Telefono  <input type="text"  name="txt_telefono"> </th>
                    <th>ASP responsable  <input type="text"  name="txt_aps"> </th>
                </tr>                
            </table>
            <button type="submit">Guardar</button> 
        </fieldset>
        <hr>
        <fieldset>
            <legend>Datos</legend>
            <table>
            <tr>
            <th>N°Ingreso</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Parte Policial</th>
            <th>Apellidos</th>
            <th>Nombres</th>
            <th>Sexo</th>
            <th>Cedula</th>
            <th>Nacionalidad</th>
            <th>Causa Investigacion</th>
            <th>Lugar Detencion</th>
            <th>Certificado Medico</th>
            <th>Policia Acargo</th>
            <th>Telefono</th>
            <th>ASP Responsable</th>
            <th colspan ="2"> Operaciones</th>
            </tr>
            <?php 
             include ("../conexion/conexion.php");
             $query= "SELECT * FROM ingresos";
             $vista = $conexion->query($query);
             while($row=$vista->fetch_assoc()){
            ?>
              <tr>
              <td><?php echo $row['ing_Ncontrol']?></td>
              <td><?php echo $row['ing_fecha']?></td>
              <td><?php echo $row['ing_hora']?></td>
              <td><?php echo $row['ing_parteP']?></td>
              <td><?php echo $row['ing_apellidos']?></td>
              <td><?php echo $row['ing_nombres']?></td>
              <td><?php echo $row['ing_sexo']?></td>
              <td><?php echo $row['ing_cedula']?></td>
              <td><?php echo $row['ing_nacionalidad']?></td>
              <td><?php echo $row['ing_causaIn']?></td>
              <td><?php echo $row['ing_lugarD']?></td>
              <td><?php echo $row['ing_certificadoM']?></td>
              <td><?php echo $row['ing_policiaA']?></td>
              <td><?php echo $row['ing_telefono']?></td>
              <td><?php echo $row['ing_aspR']?></td>
              <td><a href="modificar_cdp.php?id=<?php echo $row['ing_id']?>">M</a></td>
              <td><a href="eliminar_cdp.php?id=<?php echo $row['ing_id']?>">E</a></td>
              </tr>
              <?php   
            }
              ?>
            </table>
        </fieldset>        
    </form>
    </section>
</body>
</html>