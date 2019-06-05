
create database tamrielnoticias character set UTF8mb4 collate utf8mb4_bin;
USE tamrielnoticias;
CREATE TABLE noticias (
    id int NOT NULL AUTO_INCREMENT,
    titulo varchar(100),
    resumo text,
    noticia text,
    imagem text,
    PRIMARY KEY (id)
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
	'Skyrim é um jogo gigantesco e rodeado por informações, missões, e atividades secundárias pra você fazer. Algumas delas você só descobre depois de anos.',
	'Skyrim é o quinto jogo da saga The Elder Scrolls, e provavelmente o mais conhecido e mais aclamado da serie. Foi lançado em novembro de 2011, (ele parece um pouco velho, mas ainda hoje ele é um jogo incrível), mas em 2016 ele recebeu uma remasterização, melhorando seu gráfico para a nova geração.

O que mais impressiona em Skyrim é a quantidade assustadora de missões, praticamente todo NPC tem uma para você realizar. Então, já se prepara para as 26 horas de jogo contínuas (brincadeira, faz isso não). E com tanta coisa diferente para fazer, o jogador acaba não encontrando missões realmente “escondidas”.',
    'https://images-na.ssl-images-amazon.com/images/I/71jSbj-ZSbL._SL1280_.jpg'
);
