<?php
    include './config/dbConnection.php';
    session_start();
    if (isset($_SESSION["logado"]) && $_SESSION["logado"] == TRUE){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Login</title>
    <style>
        #register{
            display: none;
        }
    </style>
    <script type="text/javascript" src="auth.php"></script>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: black; height: 92px;">
                <img src="imgs/logo.png" style="float:left; width: 15%;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="background-image: url(imgs/tesbg.jpg); height:700px; background-repeat: no-repeat; background-size: 100% 100%;">
                        <div style="width: 250px; height: 265px; margin-top: 15%; margin-left: 45%; background-color: rgba(11, 11, 12,0.8); text-align: center; color: white;">
                                <form method="post" action="config/authsession.php">
                                <label for="login">
                                Login:<br>
                                <input type="text" name="login" id="login" value="" required> </label>
                                <br>
                                <label for="senha">
                                Senha:<br>
                                <input type="password" name="senha" id="senha" value="" required> </label>
                                <br><br>
                                <button type="submit">LOGIN</button><br><br>
                                </form>
                                <span>Não tem uma conta?</span><br>
                                <button onClick="register()">REGISTRE-SE</button><br>
                        </div>
            </div>
        </div>
    </div>

    <script>
        function register(){
            window.open("register.php");
        }
    </script>
</body>
</html>