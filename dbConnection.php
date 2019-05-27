<?php


    $connection = mysqli_connect('localhost', 'root', '', 'tamrieladv');
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $tabela = mysqli_query($connection, "SELECT * FROM noticias");
    $linha = mysqli_fetch_array($tabela);

    /* $linha['coluna']*/

    /*  
        CREATE TABLE noticias(
        id int NOT NULL AUTO_INCREMENT,
        titulo varchar(50),
        resumo varchar(30),
        noticia varchar(300),
        PRIMARY KEY (id));  
    */
?>
