<?php
    session_start();
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
        header("Location: auth.php");
         
    }
    else { echo 'PAGINA MAPA: USUARIO LOGADO'; }
?>