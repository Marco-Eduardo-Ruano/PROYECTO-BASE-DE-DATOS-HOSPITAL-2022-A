
<?php
/*
RUANO VIZCARRA MARCO EDUARDO.
*/
?>
<?php
include("conexion_be.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilos2.css" type="text/css" media="all">


    <title>CONSULTAS INDIVIDUALES</title>
</head>
<center>
<body>
<section class="form-register">

    <form action="" method="get">
        <input class="controls" type="text" name="busqueda"> <br>
        <input class="botons" type="submit" name="enviar" value="Buscar">
        
        

    </form>
<br><br><br>
<?php
if(isset($_GET['enviar'])){
    $busqueda = $_GET['busqueda'];
    $consulta = $conexion->query("SELECT * FROM citas WHERE NOMBRE LIKE '%$busqueda%'");
  
   while ($row = $consulta->fetch_array()){
        echo "NOMBRRE:  " ; echo $row['NOMBRE'],'<br>'; 
        echo "ESPECIALIDAD:  " ; echo $row['ESPECIALIDAD'],'<br>';
        echo "DOCTOR:  " ;echo $row['DOCTOR'],'<br>';
        echo "DIA:  " ;echo $row['DIA'],'<br>';
        echo "MES:  " ;echo $row['MES'],'<br>';
        echo "AÑO: " ;echo $row['AÑO'],'<br>';
        echo "HORA: " ;echo $row['HORA'],'<br>';

   }

}

?>
        <button class="botons"  onclick="location.href='recepcionista.php'">Pagina Anterior</button>
</section>

</body>
</center>
</html>