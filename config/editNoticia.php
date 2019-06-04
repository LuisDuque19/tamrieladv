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
?>
            <h2>Editar notícia: </h2>
                <?php echo "<form method='POST' action='config/editNoticiaFinal.php'>" ?>
                <input type="text" id="id" name="id" value="<?php echo $_GET['id']; ?>" readonly>
                <label>Título:</label>
                <input type="text" id="titulo" name="titulo">
                <label>Resumo:</label>
                <input type="text" id="resumo" name="resumo">
                <label>Notícia:</label>
                <input type="text" id="noticia" name="noticia">
                <button type="submit">Enviar</button>
            </form>

<?php   }} ?>