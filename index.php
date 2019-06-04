<?php
    include './config/dbConnection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tamriel Adventures</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<header>
		<div class="main-menu">
		<a href="" class="logo"><img src="imgs/logo.png" width="225px" height="65px"></a>
			<ul>
				<li><a href="#" class="menu-item" name="btn1" onclick="loadHome()"><img src="imgs/borda1.png" class="setinha">HOME<img src="imgs/borda2.png" class="setinha"></a></li>
				<li><a href="#" class="menu-item" name="btn2" onclick="loadNovidades()"><img src="imgs/borda1.png" class="setinha">NOVIDADES<img src="imgs/borda2.png" class="setinha"></a></li>
				<li><a href="mapa.php" class="menu-item" name="btn3" onclick=""><img src="imgs/borda1.png" class="setinha">MAPA<img src="imgs/borda2.png" class="setinha"></a></li>
				<li><a href="explorar.php" class="menu-item" name="btn4" onclick=""><img src="imgs/borda1.png" class="setinha">EXPLORAR<img src="imgs/borda2.png" class="setinha"></a></li>
				<li><a href="#" class="menu-item" name="btn5" onclick="loadContato()"><img src="imgs/borda1.png" class="setinha">CONTATO<img src="imgs/borda2.png" class="setinha"></a></li>
			</ul>
		</div>
	</header>

	<div class="conteudo">

			<div id='home'>
			<center>
					<div class="principal">
						<div class="titulo">
						<p class="title-par">Um pouco sobre nós</p>
						</div>
						<div class="image-panel">
							<img src="imgs/img1.jpg" style="width:400px; height:350px; border-radius:15px; box-shadow:2px 2px 2px 2px; 
							-webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
                            -moz-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);">
							<div class="fix-img">
							<img src="imgs/img2.jpg" style="width:400px; height:350px; border-radius:15px; box-shadow:3px 3px 2px 2px;
							 -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
                            -moz-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);">
							</div>	
						</div>
						<div class="text-panel">Tamriel Adventures é um site sobre o universo da aclamada franquia de jogos The Elder Scrolls da empresa Bethesda Softworks. Abordamos conteúdo geral 
							sobre o jogo. Uma das principais ferramentas é a visualização de todo o mapa de Tamriel, e o fato de você poder selecionar um determinada área do mapa e explora-la da maneira 
							como desejar.
						</div>
					</div>
                </center>		
			</div>
		
			<div id='contato'>
					 <div class="about-table">
					 	
					 </div>
			</div>

			<div id='novidades'>
                <div class="noticias" style="background-color:#dfd3d3">
					<?php 
                        pegaNoticias();
                    ?>
                </div>
			</div>

		
		 
	 
	</div>
	<div class="rodape"> 
		<?php
            if (isset($_SESSION["logado"]) && $_SESSION["logado"] == TRUE){ 
                echo "<a href='config/sessionDestroy.php'> deslogar </a>" ;
            }
            
        ?>
	</div>


	<script>
		//js de teste, pode ser mudado pra jquery depois

		var contato = document.getElementById('contato');
		var novidades = document.getElementById('novidades');
		var home = document.getElementById('home');

		function loadHome(){
				//abrindo o conteudo de home
				home.style.display = "inline";

				// fechando conteudo das outras
				novidades.style.display = "none";	
				contato.style.display = "none";
		}

		function loadContato(){
				//abrindo o conteudo de contato
				contato.style.display = "inline";

				// fechando conteudo das outras
				novidades.style.display = "none";
				home.style.display = "none";	
		}
		function loadNovidades(){
				// bla bla bla novidades
				novidades.style.display = "inline";

				// fechando conteudo das outras
				contato.style.display = "none";
				home.style.display = "none";		
		}
	</script>	
</body>
</html>

<?php  mysqli_close($connection); ?>