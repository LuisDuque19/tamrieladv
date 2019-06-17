<?php
    
    session_start();
    
    $user = array("gabriel", "teste1", "teste2", "admin");
    $pass = array("teste", "senha1", "senha2", "admin");
    
    $userlength = count($user);

    $msg = FALSE;
    
    for($i = 0 ; $i < $userlength ; $i++) {
        if($_POST["user"] == $user[$i] && $_POST["pass"] == $pass[$i]){
            
            $msg = TRUE;
            break;
            
        }
    }

    if($msg){
        
        $_SESSION["logado"] = TRUE;
        $_SESSION["user"] = $_POST["user"];
        
        header("Location: ../index.php");
    }
    else { header("Location: ../auth.php"); }

?>