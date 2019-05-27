<?php
    include 'dbConnection.php';
    session_start();
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
        header("Location: auth.php");
         
    }
    else {
        $linhas = mysqli_num_rows($tabela);
    ?>
        <html>
            <head>
                <title>
                    EXPLORAR - TAMRIEL ADVENTURES
                </title>
                <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
                            
                        </div>
                    </div>
                </div>
            </body>
        </html>
        
        
        <?php 
        
         mysqli_close($connection);
        }

        ?>
