<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<center>
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
					CONTEUDO DA HOME AQUI
			</div>
		
			<div id='contato'>
					 CONTEUDO DE CONTATO AQUI
			</div>

			<div id='novidades'>
					CONTEUDO DE NOVIDADES AQUI
			</div>

		
		 
	 
	</div>
	</center>

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
