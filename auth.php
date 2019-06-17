<?php
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
                        <div style="width: 250px; height: 200px; margin-top: 15%; margin-left: 45%; background-color: rgba(11, 11, 12,0.8); text-align: center; color: white;">
                                <form method="post" action="config/authsession.php">
                                <label for="user">
                                Username:<br>
                                <input type="text" name="user" id="user" value="" required> </label>
                                <br>
                                <label for="pass">
                                Password:<br>
                                <input type="password" name="pass" id="pass" value="" required> </label>
                                <br><br>
                                <button type="submit">LOGIN</button>
                                </form>
                        </div>
            </div>
        </div>
    </div>

</body>
</html>