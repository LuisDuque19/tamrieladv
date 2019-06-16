
create database TADV character set UTF8mb4 collate utf8mb4_unicode_ci;
use TADV;

CREATE TABLE noticias (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    resumo VARCHAR(100) NOT NULL,
    noticia TEXT,
    imagem text
); 

CREATE TABLE Usuario(
	ID_User INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Login VARCHAR(30) NOT NULL UNIQUE,
	Senha VARCHAR(15) NOT NULL,
	Email VARCHAR(100) NOT NULL UNIQUE
	);

CREATE TABLE Personagem_Usuario(
	Nome VARCHAR(30) NOT NULL PRIMARY KEY,
	Historia VARCHAR(300),
	Imagem mediumblob,
	LoginUsuario VARCHAR(30),
	CONSTRAINT FK_LoginUsuario FOREIGN KEY (LoginUsuario) REFERENCES Usuario(Login)
	);

CREATE TABLE Atributos_Personagem(
	Nivel NUMERIC(2,0) PRIMARY KEY NOT NULL,
	Capacidade NUMERIC(4,0) NOT NULL,
	Vida NUMERIC(4,0) NOT NULL,
	Mana NUMERIC(4,0) NOT NULL,
	Experiencia NUMERIC(4,0) NOT NULL,
	Agilidade CHAR(2),
	Raca VARCHAR(15) NOT NULL,
	NomePersonagem VARCHAR(30),
	CONSTRAINT FK_NomePersonagem1 FOREIGN KEY (NomePersonagem) REFERENCES Personagem_Usuario(Nome)
	);

CREATE TABLE Inventario_Personagem(
	ID_ItemPersonagem INT NOT NULL,
	NomePersonagem VARCHAR(30),
	CONSTRAINT FK_NomePersonagem2 FOREIGN KEY (NomePersonagem) REFERENCES Personagem_Usuario(Nome)
	);

CREATE TABLE Magias_Personagem(
	ID_MagiaPersonagem INT NOT NULL,
	NomePersonagem VARCHAR(30),
	CONSTRAINT FK_NomePersonagem3 FOREIGN KEY (NomePersonagem) REFERENCES Personagem_Usuario(Nome)
	);

CREATE TABLE Itens(
	ID_Itens INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nome VARCHAR(30) NOT NULL,
	Descricao VARCHAR(200) NOT NULL,
	Eficiencia VARCHAR(30) NOT NULL,
	Tipo VARCHAR(20) NOT NULL,
	Peso VARCHAR(3) NOT NULL
	);

CREATE TABLE Magias(
	ID_Magias INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Eficiencia VARCHAR(30) NOT NULL,
	Custo VARCHAR(3) NOT NULL,
	Descricao VARCHAR(300),
	Area CHAR(2) NOT NULL,
	Alvo VARCHAR(20) NOT NULL,
	Tipo VARCHAR(30) NOT NULL
	);

CREATE TABLE Criaturas(
	ID_Criaturas INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nome VARCHAR(30) NOT NULL,
	Descricao VARCHAR(200),
	Nivel_Minimo VARCHAR(2) NOT NULL,
	Especie VARCHAR(16) NOT NULL,
	Raca VARCHAR(15) NOT NULL,
	Imagem mediumblob,
	ExperienciaDada VARCHAR(4) NOT NULL
	);

CREATE TABLE Atributos_Criaturas(
	Nivel VARCHAR(2) NOT NULL,
	Vida VARCHAR(4) NOT NULL,
	Magia VARCHAR(4) NOT NULL,
	Dano VARCHAR(3) NOT NULL,
	Defesa VARCHAR(3) NOT NULL,
	Agilidade VARCHAR(3) NOT NULL,
	ID_Criaturas int,
	CONSTRAINT FK_CriaturasId1 FOREIGN KEY (ID_Criaturas) REFERENCES Criaturas(ID_Criaturas)
	);

CREATE TABLE Magias_Criaturas(	
	Eficiencia VARCHAR(30) NOT NULL,
	Custo VARCHAR(3) NOT NULL,
	Descricao VARCHAR(300) NOT NULL,
	Area CHAR(2) NOT NULL,
	Alvo VARCHAR(20) NOT NULL,
	ID_Criaturas int,
	CONSTRAINT FK_CriaturasId2 FOREIGN KEY (ID_Criaturas) REFERENCES Criaturas(ID_Criaturas)
	);

CREATE TABLE Lugar(
	ID_Lugar INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nome VARCHAR(30) NOT NULL,
	Descricao VARCHAR(300)
	);

CREATE TABLE Recompensa(
	Registro INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Experiencia INT NOT NULL
	);


CREATE TABLE Batalha(
	ID_Personagem VARCHAR(30) NOT NULL,
	ID_Criatura INT NOT NULL,
	Registro INT NOT NULL,
	CONSTRAINT FK_NomePersonagem4 FOREIGN KEY (ID_Personagem) REFERENCES Personagem_Usuario(Nome),
	CONSTRAINT FK_CriaturasId3 FOREIGN KEY (ID_Criatura) REFERENCES Criaturas(ID_Criaturas),
	CONSTRAINT FK_Registro1 FOREIGN KEY (Registro) REFERENCES Recompensa(Registro),
	PRIMARY KEY(ID_Personagem, ID_Criatura, Registro)
	);

CREATE TABLE Itens_Recompensa(
	ID_Item INT NOT NULL,
	Registro INT NOT NULL,
	CONSTRAINT FK_Registro2 FOREIGN KEY (Registro) REFERENCES Recompensa(Registro),
	PRIMARY KEY(Registro, ID_Item)
	);
    
INSERT INTO noticias (titulo, resumo, noticia, imagem) VALUES (
	'Bethesda na E3 2019: o que esperar da conferência da dona de Skyrim e Doom',
	'Novidades vindo aí?',
	'Começando a E3 2019, a Bethesda terá o primeiro dia das pré-conferências para mostrar todas as suas novidades, trailers e anúncios no maior evento de jogos do ano. Caso você esteja por fora dos rumores, confirmações e especulações, não tem problema: o Voxel reuniu tudo que há até o momento e pegou alguns insumos do que pode rolar por lá.
Portanto, vamos reunir aqui todos os possíveis games que podem aparecer durante a apresentação da Bethesda, que acontece no dia 9 de junho às 21h30 do horário de Brasília. Como sempre, a empresa reservou um palco gigantesco para trazer todos os seus grandes anúncios.',
    'http://gameplayrj.com.br/file/2019/03/1-696x363.png'
);
INSERT INTO noticias (titulo, resumo, noticia, imagem) VALUES (
	'Skyrim | Mod adiciona copo de café de Game of Thrones ao jogo ',
	'Um pedido inusitado de vários jogadores! ',
	'Em um dos episódios da oitava temporada de Game of Thrones, um copo de café acabou aparecendo em cena, o que deu o que falar entre os fãs.
Pouco depois da gafe ser cometida, um grupo de jogadores de Skyrim começaram a pedir no Reddit por algum mod que adicionasse o tal copo de café, uma vez que os cenários do jogo e da série são parecidos.
O pedido inusitado foi aceito pelo usuário Sphered, do site NexusMods, que lançou recentemente o mod.',
    'https://jovemnerd.com.br/wp-content/uploads/2019/05/skyrim-copo-760x321.jpeg'
);
INSERT INTO noticias (titulo, resumo, noticia, imagem) VALUES (
	'Mod multiplayer de Skyrim receberá beta em breve',
	'Pronto para explorar Tamriel com os amigos?',
	'O beta fechado de Skyrim Together, um mod do game The Elder Scrolls 5: Slyrim, será disponibilizado em breve, conforme divulgados pelos próprios criadores da modificação que torna o jogo multiplayer.
De acordo com o site Polygon, até oito jogadores podem se unir para explorar Tamriel como bem entenderem nesta versão alternativa. O beta será exclusivo para quem contribuiu com o projeto via Patreon.',
    'https://cdn.pocket-lint.com/r/s/970x/assets/images/144143-ar-vr-review-skyrim-vr-review-the-best-version-of-skyrim-yet-image2-zzmdrqtip4.jpg'
);
INSERT INTO noticias (titulo, resumo, noticia, imagem) VALUES (
	'Missões que você provavelmente não fez em Skyrim',
	'Skyrim é um jogo gigantesco e rodeado por segredos.',
	'Skyrim é o quinto jogo da saga The Elder Scrolls, e provavelmente o mais conhecido e mais aclamado da serie. Foi lançado em novembro de 2011, (ele parece um pouco velho, mas ainda hoje ele é um jogo incrível), mas em 2016 ele recebeu uma remasterização, melhorando seu gráfico para a nova geração.
O que mais impressiona em Skyrim é a quantidade assustadora de missões, praticamente todo NPC tem uma para você realizar. Então, já se prepara para as 26 horas de jogo contínuas (brincadeira, faz isso não). E com tanta coisa diferente para fazer, o jogador acaba não encontrando missões realmente “escondidas”.',
    'https://images-na.ssl-images-amazon.com/images/I/71jSbj-ZSbL._SL1280_.jpg'
);