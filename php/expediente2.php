<?php
/*
RUANO VIZCARRA MARCO EDUARDO.
*/
?>
<!DOCTYPE html>
<html>
<head>
    <center>
	<title>EXPEDIENTE</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/estilos2.css" type="text/css" media="all">

</head>

<body>
<section class="form-register">
    	<h1>EXPEDIENTE </h1>
        <p></p>
            <button class="botons" onclick="location.href='doctor.php'">Pagina Anterior</button>
        
            <button class="botons" onclick="location.href='mostrar_expediente.php'">MOSTRAR EXPEDIENTE</button>
    
        <form action="" method="POST">
            <input class="controls" type="text" name ="id" placeholder="INGRESA ID"><br/>
        
            <input class="controls" type="text" name ="AREA" placeholder="INGRESA EL AREA"><br/>
            
            <input class="controls" type="text" name ="EXPEDIENTE" placeholder="EXPEDIENTE"><br/>
           
            <input class="botons" type="submit" name="update" value="ACTUALIZAR EXPEDIENTE"/>
           
            
        </center>
</section>
</body>
</html>

<?php
include("conexion_be.php");


if (isset($_POST['update']))
{

    $id = $_POST['id'];

    $query = "UPDATE pacientes SET AREA='$_POST[AREA]',EXPEDIENTE='$_POST[EXPEDIENTE]' WHERE id='$_POST[id]'";
    $query_run = mysqli_query($conexion,$query);
    if($query_run){

        echo '<script type="text/javascript"> alert ("Datos Actualizados")</script>';

    }
        else{

            echo '<script type="text/javascript"> alert ("Datos NO Actualizados")</script>';
        }

}


?>


