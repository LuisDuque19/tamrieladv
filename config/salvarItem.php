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
    if(salvaItem($_POST['Nome'], $_POST['Descricao'], $_POST['Eficiencia'], $_POST['Tipo'], $_POST['Peso'])){
        header("Location: ../admin.php");
    }
?>

<?php   }} ?>
