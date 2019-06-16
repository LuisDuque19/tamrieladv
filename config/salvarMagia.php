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
    if(salvaMagia($_POST['Eficiencia'], $_POST['Custo'], $_POST['Descricao'], $_POST['Area'], $_POST['Alvo'], $_POST['Tipo'])){
        header("Location: ../admin.php");
    }
?>

<?php   }} ?>
