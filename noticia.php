<?php
    /* noticia clicada vai aparecer aqui */
    include './config/dbConnection.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Notícia</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: black; height: 92px;">
                <img src="imgs/logo.png" style="float:left; width: 15%;">
                <h3 style="float: right; color: white;"><a href="/" style="text-decoration: none; color: white;">🡐 Voltar </a> </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" style="background-image: url(imgs/tesbg.jpg); height:700px; background-repeat: no-repeat; background-size: 100% 100%;">
                    <div class="container" style="background-color: #dfd3d3; height: 100%; font-family: TW Cen Mt Condensed;
    color: black; font-size:20px; border-radius: 15px; ">
                        <?php acessaNoticia($_GET['idnoticia']); ?> 
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="background-color: black; height: 92px;">
                
            </div>
        </div>
    </div>

</body>
</html>