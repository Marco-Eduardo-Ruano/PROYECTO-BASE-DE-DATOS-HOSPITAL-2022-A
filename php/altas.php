<?php
/*
RUANO VIZCARRA MARCO EDUARDO.
*/
?>
<!DOCTYPE html>
<html>
<head>
    <center>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/estilos2.css" type="text/css" media="all">

</head>
<body>
<section class="form-register">
    <form method="post">
    	<h1>ALTAS </h1>
    <input class="controls" type="text" placeholder="Nombre" name="NOMBRE">
    
    <input class="controls" type="text" placeholder="CURP" name="CURP">
   
    <input class="controls" type="text" placeholder="Domicilio" name="DOMICILIO">
  
    <input class="controls" type="text" placeholder="Numero de celular" name="TELEFONO">
  
    <input class="controls" type="text" placeholder="Nombre del doctor" name="DOCTOR">

    	<input class="botons" type="submit" name="register">
        
    </form>
        <?php 
        include("registro_paciente_be.php");
        ?>
        <button class="botons" onclick="location.href='recepcionista.php'">Pagina Anterior</button>
        </center>
</section>

</body>
</html>