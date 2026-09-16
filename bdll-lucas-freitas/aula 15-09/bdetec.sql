CREATE DATABASE bdetec;
USE bdetec;

CREATE TABLE cad (
  CODFUN  INT NOT NULL PRIMARY KEY,
  NOME    VARCHAR(40) NOT NULL,
  DEPTO   CHAR( 2),
  FUNCAO  CHAR(20),
  SALARIO DECIMAL(10, 2));
  
  
  
  #COMANDO DDL
  #alteração de tabelas
  #sintax: alter table <nometabela><clausulas><camposnovos>
  ALTER TABLE cadfun ADD filhos int;
  desc cadfun;
  ALTER TABLE cadfun ADD ADMISSAO varchar(10);
  desc cadfun;
  
  ALTER TABLE cadfun MODIFY COLUMN ADMISSAO date not null;
  desc cadfun;
  ALTER TABLE cadfun MODIFY COLUMN depto char(4);
  desc cadfun;
  ALTER TABLE cadfun MODIFY COLUMN funcao CHAR(20) not null;
  desc cadfun;
  ALTER TABLE cadfun drop column ADMISSAO;
  DESC CADFUN;
  ALTER TABLE cad MODIFY COLUMN departamento char(4);
  ALTER TABLE CAD CHANGE COLUMN depto departamento char(4);
  desc cad;
  RENAME TABLE cadfun TO cad;
  desc cad;
  #drop table cad;//apaga a tabela
  
  