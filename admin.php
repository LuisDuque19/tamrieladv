<?php
    /*formulario de inclusao de noticia*/
    include './config/dbConnection.php';
    session_start();
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
        header("Location: auth.php");
         
    }
    else { if($_SESSION["user"] != 'admin'){
                header("Location: index.php");
            }
            else {
        
?>
<html>
    <head>  
            <meta charset="utf-80">
            <title>Administração - Tamriel Adventures</title>
            <style>
                table, th, td {
                    border: 1px solid black;
                }
            </style>
    </head>
    <body>
        <h2>Adicionar notícia: </h2>
        <form method="POST" action="config/salvarNoticia.php">
            <label>Título:</label>
            <input type="text" id="titulo" name="titulo">
            <label>Resumo:</label>
            <input type="text" id="resumo" name="resumo">
            <label>Notícia:</label>
            <input type="text" id="noticia" name="noticia">
            <label>Imagem (link):</label>
            <input type="text" id="image" name="imagem">
            <button type="submit">Enviar</button>
        </form>
        <br>
        <table>
            <tr>
                <th>titulo</th>
                <th>resumo</th>
                <th>editar</th> 
                <th>apagar</th> 
                
            </tr>
        
         <?php pegaNoticiasAdmin(); ?> 
        </table>
        <br>
        <div id='edit' style='display: none;'>
             
        </div>
        <script>
            
        </script>
    </body>
</html>


<?php }} ?>