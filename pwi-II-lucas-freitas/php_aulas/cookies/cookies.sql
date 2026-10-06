create database cookies;
use cookies;
create table usuarios (
	email varchar(100) not null,
    senha varchar(100) not null,
    nome varchar(100) not null,
    cidade varchar(50) not null,
    estado varchar(2) not null,
    primary key(email)
);

insert into usuarios values ('viniciusmoto@gmail.com', 'teste', 'VINICIUS MOREIRA', 'São Paulo', 'SP');
