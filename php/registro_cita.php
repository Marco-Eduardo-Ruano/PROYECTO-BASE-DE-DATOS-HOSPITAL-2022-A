<?php
/*
RUANO VIZCARRA MARCO EDUARDO.
*/
?>

<?php

include 'conexion_be.php';


if (isset($_POST['register'])) {
    if (strlen($_POST['NOMBRE']) >= 1 && 
        strlen($_POST['ESPECIALIDAD']) >= 1 && 
        strlen($_POST['DOCTOR']) >= 1 && 
        strlen($_POST['DIA']) >= 1 && 
        strlen($_POST['MES']) >= 1 && 
        strlen($_POST['AÑO']) >= 1 && 
        strlen($_POST['HORA']) >= 1) {
	    $NOMBRE = trim($_POST['NOMBRE']);
	    $ESPECIALIDAD = trim($_POST['ESPECIALIDAD']);
        $DOCTOR = trim($_POST['DOCTOR']);
        $DIA = trim($_POST['DIA']);
        $MES = trim($_POST['MES']);
        $AÑO = trim($_POST['AÑO']);
        $HORA = trim($_POST['HORA']);
        $consulta = "INSERT INTO `citas`(`NOMBRE`, `ESPECIALIDAD`, `DOCTOR`, `DIA`,`MES`,`AÑO`,`HORA`) VALUES ('$NOMBRE','$ESPECIALIDAD','$DOCTOR','$DIA','$MES','$AÑO','$HORA')";   
        $resultado = mysqli_query($conexion,$consulta); 
        if ($resultado) {
	    	?> 
	    	<h3 class="ok"> <FONT COLOR="WHITE">CITA REGISTRADA!</font></h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad"><FONT COLOR="WHITE">¡Ups ha ocurrido un error!</font></h3>
           <?php
	    }
         } else {
	    	?> 
	    	<h3 class="bad"><FONT COLOR="RED">¡Por favor complete los campos!</font></h3>
           <?php
           
    }
}

?>