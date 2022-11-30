<?php

/*
RUANO VIZCARRA MARCO EDUARDO.
*/



ob_start();
?>
<?php 


$inc = include("conexion_be.php");
if ($inc) {
	$consulta = "SELECT * FROM citas";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $NOMBRE = $row['NOMBRE'];
	    $ESPECIALIDAD = $row['ESPECIALIDAD'];
	    $DOCTOR = $row['DOCTOR'];
	    $DIA = $row['DIA'];
        $MES = $row['MES'];
        $AÑO = $row['AÑO'];
        $HORA = $row['HORA'];


	    ?>
        <center>
        <div>
        	


			<div id="main-container">
			
        	 <p>
				<h4><?php echo $NOMBRE;?></h4>
			 <table>
				
					<thead>
				<tr>
					<th>DOCTOR</th>  <p></p>  <th>ESPECIALIDAD</th>  <p></p>  <th>DIA</th> <p></p> <th>MES</th> <p></p> <th>AÑO</th> <p></p> <th>HORA</th>
				</tr>
			</thead>

			<tr>
				<td><?php echo $DOCTOR;?></td> <td><?php echo $ESPECIALIDAD;?></td> <td><?php echo $DIA;?></td> <td><?php echo $MES;?></td> <td><?php echo $AÑO;?></td> <td><?php echo $HORA;?></td>
			</tr>
			
		</table>



        		</p>
        	</div>
        </div> 
		

	    <?php
	    	    }
			}
		}

		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/estilos5.css" type="text/css" media="all">
	<title>Document</title>
</head>
<body>
<section class="form-register">
	<button class="botons" onclick="location.href='pdf.php'">DESCARGAR</button>
	<button class="botons" onclick="location.href='doctor.php'">Pagina Anterior</button>
</center>
</section>
</body>
</html>