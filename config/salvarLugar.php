<?php
    include 'dbConnection.php';
    session_start();
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
        header("Location: ../auth.php");
         
    }
    else { if($_SESSION["user"] != 'admin'){
                header("Location: ../index.php");
            }
            else {
    if(salvaLugar($_POST['Nome'], $_POST['Descricao'])){
        header("Location: ../admin.php");
    }
?>

<?php   }} ?>
