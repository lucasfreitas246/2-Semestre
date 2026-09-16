CREATE DATABASE exercicio;
USE exercicio;

CREATE TABLE cadlivros (
    id int not null primary key,
    titulo varchar(255) not null,
    autor char(255) not null,
    idade int,
    ano_publicacao char(10)
);

rename table cadlivros to livros;
desc livros;
alter table livros modify column ano_publicacao int;
desc livros;
alter table livros add genero varchar(15);
desc livros;
alter table livros add quant_disponivel char(3);
desc livros;
alter table livros modify column titulo varchar(50);
desc livros;
alter table livros drop column idade;
desc livros;
alter table livros change column ano_publicacao anopubl int;
desc livros;
alter table livros change column quant_disponivel quantdisp int;
desc livros;
alter table livros modify column anopubl int not null;
desc livros;
alter table livros add editora varchar(50) not null;
desc livros;


