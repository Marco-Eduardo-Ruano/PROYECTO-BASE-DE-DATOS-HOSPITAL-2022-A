<?php
/*
RUANO VIZCARRA MARCO EDUARDO.
*/
?>

<?php
@session_start();
session_destroy();
header("Location: ../index.php");
?>