<?php
    include './config/dbConnection.php';
    session_start();
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
        header("Location: auth.php");
         
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="mapa.php"></script>
</head>
<body>
    <div id="geral">
        <img src="imgs/mapa2.png" id="mapa" usemap="#menu" width=1600px height=1095px>
        <map name="menu">
            <!-- Voltar -->
            <area href="index.php" shape="poly" coords="49,118,63,127,97,127,97,137,63,137,49,147,46,147,26,133,26,132,46,118">
            <!-- Cyrodiil -->
            <area onclick="menor()" shape="poly" coords="459,646,529,732,587,699,592,689,643,681,661,667,690,666,697,678,716,675,760,679,854,714,890,749,894,778,883,824,894,852,892,894,981,908,1000,835,1078,738,1085,686,1094,676,1072,602,1023,534,1035,498,1011,422,1005,400,974,393,944,420,920,420,883,404,858,382,826,397,803,379,759,396,741,394,730,405,688,395,686,412,663,423,637,462,620,513,575,559,548,578,524,582">
        </map>
    </div>

    <div id="cyrodiil">
        <img src="imgs/cyrodiil.png" id="mapac" usemap="#cyrodiil">
        <map name="cyrodiil">
            <!-- Voltar -->
            <area onclick="maior()" shape="poly" coords="41,145,61,160,99,160,99,172,61,172,41,187,38,187,12,165,38,145">
        </map>
    </div>

    <script>
        function menor(){
            document.getElementById("geral").style.display = "none";
            document.getElementById("cyrodiil").style.display = "block";
        }

        function maior(){
            document.getElementById("geral").style.display = "block";
            document.getElementById("cyrodiil").style.display = "none";
        }
    </script>
</body>
</html>