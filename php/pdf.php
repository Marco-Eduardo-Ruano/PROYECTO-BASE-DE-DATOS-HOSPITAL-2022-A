<?php
/*
RUANO VIZCARRA MARCO EDUARDO.
*/
?>

<?php
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
        
        <div>
        	<h2><?php echo $NOMBRE; ?></h2><br/>
        	<div>
        		<p>
        			<b> ESPECIALIDAD: </b> <?php echo $ESPECIALIDAD;       ?><br><br/>
        		    <b> DOCTOR:       </b> <?php echo $DOCTOR;  ?><br><br/>
        		    <b> DIA:          </b> <?php echo $DIA;   ?><br><br/>
                    <b> MES:          </b> <?php echo $MES;  ?><br><br/>
                    <b> AÑO:          </b> <?php echo $AÑO;  ?><br><br/>
                    <b> HORA:         </b> <?php echo $HORA;  ?><br><br/>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}

?>
<?php
$html=ob_get_clean();
//echo $html;
require_once '../libreria/dompdf_1-2-2/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled'=> true));
$dompdf->setOptions($options);

$dompdf->loadHtml ($html);

$dompdf->setPaper('letter');
$dompdf->render();
$dompdf->stream("AgendaGeneral.pdf", array ("Attachment" => TRUE));



?>