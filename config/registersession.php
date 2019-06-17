<?php

    session_start();
    include("./dbConnection.php");

    $email = mysqli_real_escape_string($connection, trim($_POST['email']));
    $login = mysqli_real_escape_string($connection, trim($_POST['login']));
    $senha = mysqli_real_escape_string($connection, trim(md5($_POST['senha'])));

    $sql = "select count(*) as total from usuario where login = '$login'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1){
        $_SESSION['usuario_existe'] = true;
        header('Location: ../auth.php');
        exit;
    }

    $sql = "INSERT INTO Usuario (Login, Senha, Email) VALUES ('$login', '$senha', '$email')";

    if($connection -> query($sql) === TRUE){
        $_SESSION['status_cadastro'] = true;
    }

    $connection->close();
    header('Location: ../auth.php');
    exit;
?>