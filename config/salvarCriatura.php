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
    if(salvaCriatura($_POST['Nome'], $_POST['Descricao'], $_POST['Nivel_Minimo'], $_POST['Especie'], $_POST['Raca'], $_POST['Imagem'], $_POST['ExperienciaDada'])){
        header("Location: ../admin.php");
    }
?>

<?php   }} ?>