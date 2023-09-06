<?php

date_default_timezone_get("America/Mexicco_City");
if (isset($_SESSION["usuario"])) {
    $fechaGuardada=$_SESSION['ENTER'];
    $ahora = date("Y-m-j H-i-s");}
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
    //ifecho $tiempo_transcurrido
    if ($tiempo_transcurrido >=1800) {
        echo'Saliendo.....';
        session_destroy();
        echo'<meta HTTP-EQUIV="REFRESH" CONTENT = "0;URL=index.php">';
    }else{

        $_SESSION['Enter']=$ahora;

    }

}

?>