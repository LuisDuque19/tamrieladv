<?php


    $connection = mysqli_connect('localhost', 'root', '', 'tamrielnoticias');
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $tabela = mysqli_query($connection, "SELECT * FROM noticias") or die('erro ao consultar tabela');
    

    /* METODOS PARA ACESSAR O DB */
    
    function pegaNoticias(){
         global $tabela;
         while($linha = mysqli_fetch_assoc($tabela)) {
            echo "<a href='noticia.php?idnoticia={$linha['id']}' style='text-decoration: none;'>{$linha['titulo']} <br> {$linha['resumo']} <br> <br> </a>";
        }
    }
    
    function salvaNoticia($titulo, $resumo, $noticia){
        /* insert into*/
        global $connection;
        mysqli_query($connection, "INSERT INTO noticias (titulo, resumo, noticia) VALUES ('{$titulo}','{$resumo}','{$noticia}')");
        return true;
    }
    
    function deletaNoticia($id){
        /*DELETE FROM table_name WHERE condition;*/
        global $connection;
        mysqli_query($connection, "DELETE FROM noticias WHERE id = " . $id);
        return true;
    }
    
    function editaNoticia($id, $titulo, $resumo, $noticia){
        /*UPDATE table_name
        SET column1 = value1, column2 = value2, ...
        WHERE condition; */
        global $connection;
        mysqli_query($connection, "UPDATE noticias SET titulo = '{$titulo}', resumo = '{$resumo}', noticia = '{$noticia}' WHERE id = {$id}");
        return true;
    }

    function acessaNoticia($id){
        /* select * from noticias where id = ' . $id */
        global $connection;
        $pegaNoticia = mysqli_query($connection, 'select * from noticias where id = ' . $id);
        while($linha = mysqli_fetch_assoc($pegaNoticia)) {
            echo "<h2>{$linha['titulo']}</h2> <br> <h4>{$linha['resumo']}</h4> <br> <br> <p>{$linha['noticia']}</p>";
        }
    }

    function pegaNoticiasAdmin(){
        global $tabela;
         while($linha = mysqli_fetch_assoc($tabela)) {
            echo "<tr> <td>{$linha['titulo']}</td> <td>{$linha['resumo']}</td> <td><a href='./config/editNoticia.php?id={$linha['id']}'>edit</a></td> <td><a href='./config/deleteNoticia.php?id={$linha['id']}'>delete</a> </td> </tr> ";
        }
    }
?>
