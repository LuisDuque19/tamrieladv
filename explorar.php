<?php
    include './config/dbConnection.php';
    session_start();
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
        header("Location: auth.php");
    }
    else {
        $login = mysqli_real_escape_string($connection, $_SESSION['login']);
        $query = "SELECT LoginUsuario, Nome, Count(*) FROM Personagem_Usuario WHERE LoginUsuario = '$login' GROUP BY LoginUsuario";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);

        if($row['Count(*)'] == 0 || $row['Count(*)']  == null){
            header("Location: create.php");
        }else{
    ?>

        <script type="text/javascript" src="./lib/jquery-3.3.1.min.js"></script>

        <html>
            <head>
                <title>
                    Inicie sua Aventura!
                </title>
                <link rel="stylesheet" type="text/css" href="css/explorar.css">
            </head>
            <body onload="verif()">
                <div class="container">
                    <div class="main-menu">
		            <a href="" class="logo"><img src="imgs/logo.png" width="225px" height="65px"></a>
			        <ul>
				        <li><a href="index.php" class="menu-item" name="btn1" onclick="loadHome()"><img src="imgs/borda1.png" class="setinha">HOME<img src="imgs/borda2.png" class="setinha"></a></li>
				        <li><a href="noticia.php" class="menu-item" name="btn2" onclick="loadNovidades()"><img src="imgs/borda1.png" class="setinha">NOVIDADES<img src="imgs/borda2.png" class="setinha"></a></li>
				        <li><a href="mapa.php" class="menu-item" name="btn3" onclick=""><img src="imgs/borda1.png" class="setinha">MAPA<img src="imgs/borda2.png" class="setinha"></a></li>
				        <li><a href="explorar.php" id="explorar" class="menu-item" name="btn4" onclick=""><img src="imgs/borda1.png" class="setinha">EXPLORAR<img src="imgs/borda2.png" class="setinha"></a></li>
				        <li><a href="contato.php" class="menu-item" name="btn5" onclick="loadContato()"><img src="imgs/borda1.png" class="setinha">CONTATO<img src="imgs/borda2.png" class="setinha"></a></li>
			        </ul>
                    </div>
                    <div class="char-select">
                        <div class="char"><form action="mexplorar.php" method="post"><>
                            <?php
                                $query = "SELECT Nome, Imagem, Nivel, Experiencia, Raca FROM Atributos_Personagem LIMIT 1 ";
                                $res =  mysqli_query($connection, $query);
                            ?>
                            <center><div class="titulo" name="titulo"><?php echo $row['Nome'] ?></div></center>
                            <center><div class="imagem"><img src="<?php $row['Imagem'] ?>"></div></center>
                            <center><div class="nivel">Nível <?php $row['Nivel'] ?> Experiência <?php $row['Experiencia'] ?></div></center>
                            <center><div class="raca"><?php $row['Raca'] ?></div></center>
                        </a></form></div>

                        <div class="char"><a href="#">
                        </a></div>
                    </div>

                    <div class="account">

                    </div>
                </div>
            </body>
            <?php 
                }
            }
            ?>
        </html>