<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Teste</title>
	<script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="js/fon.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body onload="iniciar()">
	<div class="container">
		<header>
			<div>
				<ul class="main-menu">
					<a href="" class="logo"><img src="imgs/logo.png" width="225px" height="65px"></a>
					<li><a href="#" class="menu-item" name="btn1" id="homeBtn" onclick="loadConteudo(home, novidades, contato)"><img src="imgs/borda1.png" class="setinha"><span>HOME</span><img src="imgs/borda2.png" class="setinha"></a></li>
					<li><a href="#" class="menu-item" name="btn2" id="novidadesBtn"onclick="loadConteudo(novidades, home, contato)"><img src="imgs/borda1.png" class="setinha"><span>NOVIDADES</span><img src="imgs/borda2.png" class="setinha"></a></li>
					<li><a href="mapa.php" class="menu-item" name="btn3" onclick=""><img src="imgs/borda1.png" class="setinha"><span>MAPA</span><img src="imgs/borda2.png" class="setinha"></a></li>
					<li><a href="explorar.php" class="menu-item" name="btn4" onclick=""><img src="imgs/borda1.png" class="setinha"><span>EXPLORAR</span><img src="imgs/borda2.png" class="setinha"></a></li>
					<li><a href="#" class="menu-item" name="btn5" id="contatoBtn" onclick="loadConteudo(contato, home, novidades)"><img src="imgs/borda1.png" class="setinha"><span>CONTATO</span><img src="imgs/borda2.png" class="setinha"></a></li>
				</ul>
			</div>
		</header>

		<div class="conteudo">
				<div id='home'>
					<!-- A ideia aqui é ter um Banner com uma imagem e um texto sobre ela, e quando clica no botão a imagem muda junto com o texto, como se fosse notícia -->
					<div class="banner">
						<img id="bannerImg" src="imgs/tesbg.jpg" width="1348px">
						<div class="bannerBox"></div>
						<label class="bannerText">Fon</label>
						<input class="botaoE" type="button" value="<" onclick="mudarBanner(-1)">
						<input class="botaoD"type="button" value=">" onclick="mudarBanner(1)">
					</div>

					<div>
						Resto do Home aqui
					</div>
				</div>

				<div id='novidades'>
					CONTEUDO DE NOVIDADES AQUI
				</div>
		
				<div id='contato'>
					CONTEUDO DE CONTATO AQUI
				</div>
		</div>
	</div>
</body>
</html>
