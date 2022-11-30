<?php
/*
RUANO VIZCARRA MARCO EDUARDO.
*/
?>


<?php

include 'conexion_be.php';


if (isset($_POST['register'])) {
    if (strlen($_POST['NOMBRE']) >= 1 && 
        strlen($_POST['CURP']) >= 1 && 
        strlen($_POST['DOMICILIO']) >= 1 && 
        strlen($_POST['TELEFONO']) >= 1 && 
        strlen($_POST['AREA']) >= 1 && 
        strlen($_POST['DOCTOR']) >= 1) {
	    $NOMBRE = trim($_POST['NOMBRE']);
	    $CURP = trim($_POST['CURP']);
        $DOMICILIO = trim($_POST['DOMICILIO']);
        $TELEFONO = trim($_POST['TELEFONO']);
        $AREA = trim($_POST['AREA']);
        $DOCTOR = trim($_POST['DOCTOR']);
        $consulta = "INSERT INTO `pacientes`(`NOMBRE`, `CURP`, `DOMICILIO`, `TELEFONO`,`AREA`,`DOCTOR`) VALUES ('$NOMBRE','$CURP','$DOMICILIO','$TELEFONO','$AREA','$DOCTOR')";   
        $resultado = mysqli_query($conexion,$consulta); 
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>