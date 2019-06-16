<?php


    $connection = mysqli_connect('localhost', 'root', '', 'TADV');
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $tabela = mysqli_query($connection, "SELECT * FROM noticias") or die('erro ao consultar tabela');
    

    /* METODOS PARA ACESSAR O DB */
    /* NOTICIAS */
    function pegaNoticias(){
         global $tabela;
         while($linha = mysqli_fetch_assoc($tabela)) {
            echo "<a href='noticia.php?idnoticia={$linha['id']}' style='text-decoration: none;'> <h1 class='tituloNoticia'>{$linha['titulo']} </h1> <img src='{$linha['imagem']}'  height='100' width='250'> <p class='resumoNoticia'>{$linha['resumo']}</p> </a>";
        }
    }
    
    function salvaNoticia($titulo, $resumo, $noticia, $imagem){
        /* insert into*/
        global $connection;
        mysqli_query($connection, "INSERT INTO noticias (titulo, resumo, noticia, imagem) VALUES ('{$titulo}','{$resumo}','{$noticia}','{$imagem}')");
        return true;
    }
    
    function deletaNoticia($id){
        /*DELETE FROM table_name WHERE condition;*/
        global $connection;
        mysqli_query($connection, "DELETE FROM noticias WHERE id = " . $id);
        return true;
    }
    
    function editaNoticia($id, $titulo, $resumo, $noticia, $imagem){
        /*UPDATE table_name
        SET column1 = value1, column2 = value2, ...
        WHERE condition; */
        global $connection;
        mysqli_query($connection, "UPDATE noticias SET titulo = '{$titulo}', resumo = '{$resumo}', noticia = '{$noticia}', imagem = '{$imagem}' WHERE id = {$id}");
        return true;
    }

    function acessaNoticia($id){
        /* select * from noticias where id = ' . $id */
        global $connection;
        $pegaNoticia = mysqli_query($connection, 'select * from noticias where id = ' . $id);
        while($linha = mysqli_fetch_assoc($pegaNoticia)) {
            echo "<h1>{$linha['titulo']}</h1> <h3>{$linha['resumo']}</h3> <br> <img src='{$linha['imagem']}'  height='350' width='400'>   <p>{$linha['noticia']}</p>";
        }
    }

    function pegaNoticiasAdmin(){
        global $tabela;
         while($linha = mysqli_fetch_assoc($tabela)) {
            echo "<tr> <td>{$linha['titulo']}</td> <td>{$linha['resumo']}</td> <td><a href='./config/editNoticia.php?id={$linha['id']}'>edit</a></td> <td><a href='./config/deleteNoticia.php?id={$linha['id']}'>delete</a> </td> </tr> ";
        }
    }
    /* CRIATURAS */
    function pegaCriaturas(){
         global $connection;
         $tabela = mysqli_query($connection, "SELECT * FROM Criaturas") or die('erro ao consultar tabela');
         while($linha = mysqli_fetch_assoc($tabela)) {
            echo "<tr>
                     <td>{$linha['Nome']}</td> 
                     <td>{$linha['Descricao']}</td> 
                     <td>{$linha['Nivel_Minimo']}</td>
                     <td>{$linha['Especie']}</td> 
                     <td>{$linha['Raca']}</td> 
                     <td>{$linha['ExperienciaDada']}</td> 
                     <td><a href='./config/deleteCriatura.php?id={$linha['ID_Criaturas']}'>delete</a> </td> 
                 </tr> ";
        }
    }

    function salvaCriatura($Nome, $Descricao, $Nivel_Minimo, $Especie, $Raca, $Imagem, $ExperienciaDada){
        global $connection;
        mysqli_query($connection, "INSERT INTO Criaturas (Nome, Descricao, Nivel_Minimo, Especie, Raca, Imagem, ExperienciaDada) VALUES ('{$Nome}','{$Descricao}','{$Nivel_Minimo}','{$Especie}' , '{$Raca}' , '{$Imagem}' , '{$ExperienciaDada}')");
        return true;
    }

    function deletaCriatura($id){
        global $connection;
        mysqli_query($connection, "DELETE FROM Criaturas WHERE ID_Criaturas = " . $id);
        return true;
    }

    /* ITENS */

    function pegaItens(){
         global $connection;
         $tabela = mysqli_query($connection, "SELECT * FROM Itens") or die('erro ao consultar tabela');
         while($linha = mysqli_fetch_assoc($tabela)) {
            echo "<tr>
                     <td>{$linha['Nome']}</td> 
                     <td>{$linha['Descricao']}</td> 
                     <td>{$linha['Eficiencia']}</td>
                     <td>{$linha['Tipo']}</td> 
                     <td>{$linha['Peso']}</td> 
                     <td><a href='./config/deleteItem.php?id={$linha['ID_Itens']}'>delete</a> </td> 
                 </tr> ";
        }
    }

    function salvaItem($Nome, $Descricao, $Eficiencia, $Tipo, $Peso){
        global $connection;
        mysqli_query($connection, "INSERT INTO Itens (Nome, Descricao, Eficiencia, Tipo, Peso) VALUES ('{$Nome}','{$Descricao}','{$Eficiencia}','{$Tipo}' , '{$Peso}')") or die(mysqli_error());
        return true;
    }

    function deletaItem($id){
        global $connection;
        mysqli_query($connection, "DELETE FROM Itens WHERE ID_Itens = " . $id);
        return true;
    }


    /* MAGIAS */

    function pegaMagias(){
         global $connection;
         $tabela = mysqli_query($connection, "SELECT * FROM Magias") or die('erro ao consultar tabela');
         while($linha = mysqli_fetch_assoc($tabela)) {
            echo "<tr>
                     <td>{$linha['Eficiencia']}</td> 
                     <td>{$linha['Custo']}</td> 
                     <td>{$linha['Descricao']}</td>
                     <td>{$linha['Area']}</td> 
                     <td>{$linha['Alvo']}</td> 
                     <td>{$linha['Tipo']}</td> 
                     <td><a href='./config/deleteMagia.php?id={$linha['ID_Magias']}'>delete</a> </td> 
                 </tr> ";
        }
    }

    function salvaMagia($Eficiencia, $Custo, $Descricao, $Area, $Alvo, $Tipo){
        global $connection;
        mysqli_query($connection, "INSERT INTO Magias (Eficiencia, Custo, Descricao, Area, Alvo, Tipo) VALUES ('{$Eficiencia}','{$Custo}','{$Descricao}','{$Area}' , '{$Alvo}' , '{$Tipo}')") or die(mysqli_error());
        return true;
    }

    function deletaMagia($id){
        global $connection;
        mysqli_query($connection, "DELETE FROM Magias WHERE ID_Magias = " . $id);
        return true;
    }

    /*  LUGARES  */

    function pegaLugares(){
         global $connection;
         $tabela = mysqli_query($connection, "SELECT * FROM Lugar") or die('erro ao consultar tabela');
         while($linha = mysqli_fetch_assoc($tabela)) {
            echo "<tr>
                     <td>{$linha['Nome']}</td> 
                     <td>{$linha['Descricao']}</td> 
                     <td><a href='./config/deleteLugar.php?id={$linha['ID_Lugar']}'>delete</a> </td> 
                 </tr> ";
        }
    }

    function salvaLugar($Nome, $Descricao){
        global $connection;
        mysqli_query($connection, "INSERT INTO Lugar (Nome, Descricao) VALUES ('{$Nome}', '{$Descricao}')") or die(mysqli_error());
        return true;
    }

    function deletaLugar($id){
        global $connection;
        mysqli_query($connection, "DELETE FROM Lugar WHERE ID_Lugar = " . $id);
        return true;
    }

?>
