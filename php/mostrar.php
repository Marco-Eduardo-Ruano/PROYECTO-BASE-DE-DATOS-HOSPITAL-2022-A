<?php
/*
RUANO VIZCARRA MARCO EDUARDO.
*/
?>

<?php 

$inc = include("conexion_be.php");
if ($inc) {
	$consulta = "SELECT * FROM pacientes";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $NOMBRE = $row['NOMBRE'];
	    $CURP = $row['CURP'];
	    $DOMICILIO = $row['DOMICILIO'];
	    $TELEFONO = $row['TELEFONO'];
        $DOCTOR = $row['DOCTOR'];


	    ?>
        <div>

		<h4>* <?php echo $NOMBRE; ?></h4>
 	
        	<div>
        	
        			<b> CURP:       </b> <?php echo $CURP;       ?><br>
        		    <b> DOMICILIO:  </b> <?php echo $DOMICILIO;  ?><br>
        		    <b> TELEFONO:   </b> <?php echo $TELEFONO;   ?><br>
                    <b> DOCTOR:     </b> <?php echo $DOCTOR;     ?><br>
        		<p></p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>