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

                #noticias{
                    display: none;
                }

                #criatura{
                    display: none;
                }

                #item{
                    display: none;
                }

                #magia{
                    display: none;
                }

                #lugar{
                    display: none;
                }
            </style>
            <script type="text/javascript" src="admin.php"></script>
    </head>
    <body>
        <button onclick="noticia()">Adicionar notícia</button>
        <button onclick="criatura()">Adicionar criatura</button>
        <button onclick="item()">Adicionar item</button>
        <button onclick="magia()">Adicionar magia</button>
        <button onclick="lugar()">Adicionar lugar</button>

        <div id="noticias">
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
        </div>
        
        <div id="criatura">
            <form method="POST" action="config/salvarCriatura.php">
                <label>Nome:</label>
                <input type="text" id="Nome" name="Nome">
                <label>Descrição:</label>
                <input type="text" id="Descricao" name="Descricao">
                <label>Nível Mínimo:</label>
                <input type="text" id="Nivel_Minimo" name="Nivel_Minimo" style="width: 20px;">
                <br>
                <label>Espécie:</label>
                <input type="text" id="Especie" name="Especie">
                <label>Raça:</label>
                <input type="text" id="Raca" name="Raca">
                <label>Experiência dada:</label>
                <input type="text" id="ExperienciaDada" name="ExperienciaDada" style="width:20px;">
                <label>Imagem (link):</label>
                <input type="file"
                id="Imagem" name="Imagem"
                accept="image/png, image/jpeg"> 
                <br>
                <button type="submit">Enviar</button>
            </form>
            <br>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Nível Mínimo</th>
                    <th>Espécie</th>
                    <th>Raça</th>
                    <th>Experiência</th>
                    <th>apagar</th> 
                    
                </tr>
            
             <?php pegaCriaturas(); ?> 
            </table>
            <br>
        </div>

        <div id="item">
            <form method="POST" action="config/salvarItem.php">
                <label>Nome:</label>
                <input type="text" id="Nome" name="Nome">
                <label>Descrição:</label>
                <input type="text" id="Descricao" name="Descricao">
                <label>Eficiência:</label>
                <input type="text" id="Eficiencia" name="Eficiencia" >
                <br>
                <label>Tipo:</label>
                <input type="text" id="Tipo" name="Tipo">
                <label>Peso:</label>
                <input type="text" id="Peso" name="Peso" style="width:20px;">
                <br>
                <button type="submit">Enviar</button>
            </form>
            <br>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Eficiência</th>
                    <th>Tipo</th>
                    <th>Peso</th>
                    <th>apagar</th> 
                    
                </tr>
            
             <?php pegaItens(); ?> 
            </table>
            <br>
        </div>

        <div id="magia">
            <form method="POST" action="config/salvarMagia.php">
                <label>Eficiência:</label>
                <input type="text" id="Eficiencia" name="Eficiencia">
                <label>Custo:</label>
                <input type="text" id="Custo" name="Custo" style="width: 20px;">
                <label>Descrição:</label>
                <input type="text" id="Descricao" name="Descricao">
                <br>
                <label>Área:</label>
                <input type="text" id="Area" name="Area" style="width: 20px;">
                <label>Alvo:</label>
                <input type="text" id="Alvo" name="Alvo">
                <label>Tipo:</label>
                <input type="text" id="Tipo" name="Tipo">
                <br>
                <button type="submit">Enviar</button>
            </form>
            <br>
            <table>
                <tr>
                    <th>Eficiência</th>
                    <th>Custo</th>
                    <th>Descrição</th>
                    <th>Área</th>
                    <th>Alvo</th>
                    <th>Tipo</th>
                    <th>apagar</th> 
                    
                </tr>
            
             <?php  pegaMagias();  ?> 
            </table>
            <br>
        </div>

        <div id="lugar">
            <form method="POST" action="config/salvarLugar.php">
                <label>Nome:</label>
                <input type="text" id="Nome" name="Nome">
                <label>Descrição:</label>
                <input type="text" id="Descricao" name="Descricao">
                <button type="submit">Enviar</button>
            </form>
            <br>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>apagar</th> 
                    
                </tr>
            
             <?php pegaLugares();  ?> 
            </table>
            <br>
        </div>

        <script>
        function noticia(){
            document.getElementById("noticias").style.display = "block";
            document.getElementById("criatura").style.display = "none";
            document.getElementById("item").style.display = "none";
            document.getElementById("magia").style.display = "none";
            document.getElementById("lugar").style.display = "none";
        }

        function criatura(){
            document.getElementById("noticias").style.display = "none";
            document.getElementById("criatura").style.display = "block";
            document.getElementById("item").style.display = "none";
            document.getElementById("magia").style.display = "none";
            document.getElementById("lugar").style.display = "none";
        }

        function item(){
            document.getElementById("noticias").style.display = "none";
            document.getElementById("criatura").style.display = "none";
            document.getElementById("item").style.display = "block";
            document.getElementById("magia").style.display = "none";
            document.getElementById("lugar").style.display = "none";
        }

        function magia(){
            document.getElementById("noticias").style.display = "none";
            document.getElementById("criatura").style.display = "none";
            document.getElementById("item").style.display = "none";
            document.getElementById("magia").style.display = "block";
            document.getElementById("lugar").style.display = "none";
        }

        function lugar(){
            document.getElementById("noticias").style.display = "none";
            document.getElementById("criatura").style.display = "none";
            document.getElementById("item").style.display = "none";
            document.getElementById("magia").style.display = "none";
            document.getElementById("lugar").style.display = "block";
        }
        </script>
    </body>
</html>


<?php }} ?>