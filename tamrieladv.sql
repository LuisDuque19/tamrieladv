
create database tamrielnoticias character set UTF8mb4 collate utf8mb4_bin;

USE tamrielnoticias;

CREATE TABLE noticias (
    id int NOT NULL AUTO_INCREMENT,
    titulo varchar(100),
    resumo varchar(100),
    noticia text,
    PRIMARY KEY (id)
); 
