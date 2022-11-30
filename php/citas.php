
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
   
    <input class="controls" type="text" placeholder="ESPECIALIDAD" name="ESPECIALIDAD">
   
    <input class="controls" type="text" placeholder="DOCTOR" name="DOCTOR">
    
     <input class="controls" type="text" placeholder="DIA" name="DIA">
    
     <input class="controls" type="text" placeholder="MES" name="MES">
   
     <input class="controls" type="text" placeholder="AÑO" name="AÑO">
   
     <input class="controls" type="text" placeholder="HORA" name="HORA">
     
    	<input class="botons" type="submit" name="register">
        
    </form>
        <?php 
        include("registro_cita.php");
        ?>
        <button class="botons" onclick="location.href='recepcionista.php'">Pagina Anterior</button>
        </center>
</section>

</body>
</html>