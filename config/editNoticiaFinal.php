<?php
    include 'dbConnection.php';
    session_start();
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
        header("Location: ../auth.php");
         
    }
    else { if($_SESSION["user"] != 'admin'){
                header("Location: ../index.php");
            }
            else { if(editaNoticia($_POST['id'], $_POST['titulo'], $_POST['resumo'], $_POST['noticia'], $_POST['imagem'])){
                       
                       header("Location: ../admin.php");
                    }
?>


<?php }} ?>