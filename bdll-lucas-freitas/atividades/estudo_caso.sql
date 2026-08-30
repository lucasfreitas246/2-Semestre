create database empresa_treinamento;

use empresa_treinamento;

create table curso(
idcodigo int primary key,
nome varchar(50) not null,
duracao varchar(50) not null,
preco decimal(10,2) not null 
);

create table instrutor(
idcodigo int primary key,
nome varchar(50) not null,
endereco varchar(50) not null,
telefone varchar(12) not null
);

create table Aluno(
idcodigo int primary key,
nome varchar(50) not null,
endereco varchar(50) not null, 
telefone varchar(12) not null
);

insert into curso values(1, "Lógica de Programação", "5 dias", 350.00);
insert into curso values(2, "Java Orientado a Objetos", "10 noites", 480.00);
insert into curso values(3, "Banco de Dados MySQL", "4 sábados", 420.00);

insert into instrutor values(1, "Ricardo Almeida", "Rua das Flores, 123", "11987654321");
insert into instrutor values(2, "Fernanda Souza", "Av. Paulista, 900", "11912345678");
insert into instrutor values(3, "Marcos Vinícius", "Rua Vila Ré, 45", "11998765432");

insert into aluno values
(1, "Bruno Tanaka", "Rua Itaquera, 200", "11955443322"),
(2, "Camila Rocha", "Av. Radial Leste, 500", "11966778899"),
(3, "Diego Martins", "Rua São Miguel, 88", "11944556677");

DESC curso;

SELECT * FROM curso;

DESC instrutor;

SELECT * FROM instrutor;

DESC aluno;

SELECT * FROM aluno;