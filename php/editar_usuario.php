
<?php
/*
RUANO VIZCARRA MARCO EDUARDO.
*/
?>
<?php

include 'conexion_be.php';


if (isset($_POST['register'])) {
    if (strlen($_POST['id']) >= 1 && 
        strlen($_POST['AREA']) >= 1 &&  
        strlen($_POST['EXPEDIENTE']) >= 1) {
	    $id = trim($_POST['id']);
	    $AREA = trim($_POST['AREA']);
        $EXPEDIENTE = trim($_POST['EXPEDIENTE']);
    
        $consulta = "INSERT INTO pacientes( id,AREA,EXPEDIENTE) VALUES ('$id','$AREA','$EXPEDIENTE')";   
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