#criar banco de dados
/*nome do banco: teste
data:11/08/26
hora:19:23
local:lab 04
programadores:
*/
#conjuntos ddl
#sintaxe - create database <nome banco de dados>
create database teste;
#acessar o banco de dados
#use <nome do banco de dados>
use teste;
#criar tabela cadastro

create table cadastro(
idcad int not null primary key,
nome varchar(50) not null,
depto char(4) not null,
funcao char(20),
filhos int,
salario decimal(10,2)
);
#comando para verificar a estrutura da tabela
#desc <nome da tabela>
desc cadastro;

#conjuntos dql
#sintaxe select <campos> from <tabela>
select * from cadastro;






