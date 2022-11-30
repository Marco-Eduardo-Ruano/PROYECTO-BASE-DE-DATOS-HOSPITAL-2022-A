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
	    $AREA = $row['AREA'];
	    $EXPEDIENTE = $row['EXPEDIENTE'];
		$DOCTOR = $row['DOCTOR'];
		$id = $row['id'];


	    ?>
         

		<div id="main-container">
			
			<p>
			   <h4><?php echo $NOMBRE;?></h4>
			<table>
			   
				   <thead>
			   <tr>
				   <th>NSS</th>  <p></p>  <th>AREA</th>  <p></p>  <th>EXPEDIENTE</th> <p></p> <th>DOCTOR ASIGNADO</th> 
			   </tr>
		   </thead>

		   <tr>
			   <td><?php echo $id;?></td> <td><?php echo $AREA;?></td> <td><?php echo $EXPEDIENTE;?></td> <td><?php echo $DOCTOR;?></td> 
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
<button onclick="location.href='expediente2.php'">Pagina Anterior</button>
</body>
</html>