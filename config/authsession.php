<?php
    
    session_start();
    include("./dbConnection.php");

    if(empty($_POST['login']) || empty($_POST['senha'])){
        header('Location: ../auth.php');
        exit();
    }

    $login = mysqli_real_escape_string($connection, $_POST['login']);
    $senha = mysqli_real_escape_string($connection, $_POST['senha']);

    $query = "select Login from usuario where Login = '{$login}' and Senha = md5('{$senha}')";

    $result = mysqli_query($connection, $query);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['login'] = $login;
        $_SESSION['logado'] = true;
        header('Location: ../index.php');
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: ../auth.php');
        exit();
    }
?>