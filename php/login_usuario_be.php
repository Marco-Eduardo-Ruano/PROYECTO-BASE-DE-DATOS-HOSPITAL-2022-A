<?php
/*
RUANO VIZCARRA MARCO EDUARDO.
*/
?>

<?php

include 'conexion_be.php';

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion,"SELECT * FROM users WHERE usuario ='$usuario' AND contrasena ='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    /*if ($id==1){
    header("location: bienvenida.php");
    exit;
    } if($id==2) {

        header("location: recepcionista.php");

    }
    */
switch ($usuario) 
    {
    case ($usuario =='admin'):
        header("location: bienvenida.php");
        break;
    case ($usuario =='recepcionista'):
        header("location: recepcionista.php");
        break;
    case ($usuario =='doctor'):
        header("location: doctor.php");
        break;
        case ($usuario =='Jose'):
            header("location: doctor.php");
            break;
            case ($usuario =='Paola'):
                header("location: doctor.php");
                break;
                case ($usuario =='Claudia'):
                    header("location: doctor.php");
                    break;
                    case ($usuario =='Christofer'):
                        header("location: doctor.php");
                        break;
                        case ($usuario =='Beatriz'):
                            header("location: recepcionista.php");
                            break;
                            case ($usuario =='Susana'):
                                header("location: doctor.php");
                                break;

                    
    }
}else{
    echo ' 
        <script>
                alert("Usuario incorreco, por favor verifique los datos");
                 window.location = "../index.php";
         </script>
         
    ';
    
exit;
    }

   
?>