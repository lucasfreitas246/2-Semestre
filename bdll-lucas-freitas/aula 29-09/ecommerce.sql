CREATE DATABASE ecommerce;
USE ecommerce;

CREATE TABLE produtos (
    id INT PRIMARY KEY,
    nome VARCHAR(50),
    categoria VARCHAR(30),
    preco DECIMAL(10, 2),
    estoque INT,
    status VARCHAR(20)
);

INSERT INTO produtos (id, nome, categoria, preco, estoque, status) VALUES
(1, 'Smartphone X', 'Eletrônicos', 2500.00, 15, 'Ativo'),
(2, 'Notebook Gamer', 'Informática', 5500.00, 5, 'Ativo'),
(3, 'Mouse Sem Fio', 'Acessórios', 80.00, 50, 'Ativo'),
(4, 'Teclado Mecânico', 'Acessórios', 250.00, 0, 'Inativo'),
(5, 'Monitor 27"', 'Informática', 1200.00, 8, 'Ativo'),
(6, 'Fone Bluetooth Descontinuado', 'Acessórios', 150.00, 0, 'Descontinuado'),
(7, 'Cabo HDMI Antigo', 'Acessórios', 20.00, 0, 'Descontinuado');

/*Parte 1: Atualizações de Dados (UPDATE)

Reajuste de Preços: A categoria 'Informática' teve um aumento de custos. Atualize o preço de todos 
os produtos dessa categoria com um aumento de 10%.*/

UPDATE produtos
SET preco = preco * 1.10
WHERE categoria = 'Informática';



/*Entrada de Estoque: Chegou um novo lote do 'Teclado Mecânico'. Atualize a quantidade em estoque para 20 e mude o seu status para 'Ativo'.*/

UPDATE produtos
SET estoque = 20, status = 'Ativo'
WHERE nome = 'Teclado Mecânico';

/*quidação de Acessórios: Todos os produtos da categoria 'Acessórios' com preço abaixo de R$ 100,00 devem receber um desconto fixo de R$ 10,00.*/

UPDATE produtos
SET preco = preco - 10
WHERE categoria = 'Acessórios' AND preco < 100;

/*
Parte 2: Remoção de Dados (DELETE)
Limpeza de Cadastros: Remova da tabela todos os produtos que estão marcados com o status 'Descontinuado'.*/

DELETE FROM produtos
WHERE status = 'Descontinuado';

/*Ajuste de Estoque Zero: Exclua os produtos da categoria 'Acessórios' que possuem estoque igual a 0.*/

DELETE FROM produtos
WHERE categoria = 'Acessórios' AND estoque = 0;

#Sintaxe do comando delete

#DELETE FROM nome_da_tabela
#WHERE condicao;

#Exemplo
#DELETE FROM clientes
#WHERE id = 5;


#ATIVIDADE INDIVIDUAL

USE ecommerce;
SET SQL_SAFE_UPDATES = 0;

SELECT * FROM produtos;