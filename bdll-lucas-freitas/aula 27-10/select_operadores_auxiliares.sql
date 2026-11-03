-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS empresa_db;
USE empresa_db;

-- Criação da tabela de clientes
DROP TABLE IF EXISTS clientes;
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade VARCHAR(50),
    idade INT,
    desconto DECIMAL(5,2),
    telefone VARCHAR(20)
);

-- Inserção de dados de teste
INSERT INTO clientes (nome, cidade, idade, desconto, telefone) VALUES
('Ana Silva', 'São Paulo', 28, 15.00, '11999991111'),
('Bruno Santos', 'Rio de Janeiro', 35, 10.00, '21999992222'),
('Carla Souza', 'Belo Horizonte', 22, 0.00, NULL),
('Daniel Oliveira', 'São Paulo', 42, 20.00, '11999993333'),
('Eduardo Lima', 'Curitiba', 19, 5.00, NULL),
('Fernanda Costa', 'Porto Alegre', 31, 12.50, '51999994444'),
('Gabriel Alves', 'São Paulo', 50, 0.00, '11999995555'),
('Helena Rocha', 'Salvador', 25, 8.00, NULL);

select * from clientes;

#Busca clientes com idade entre 20 e 35 anos, ordenando do mais novo para o mais velho
SELECT nome, idade, cidade
FROM clientes
WHERE idade BETWEEN 20 AND 35
ORDER BY idade DESC;

#Busca clientes que moram em São Paulo, Rio de Janeiro ou Curitiba:
SELECT nome, cidade
FROM clientes
WHERE cidade IN ('São Paulo', 'Rio de Janeiro', 'Curitiba')
ORDER BY cidade;

#Busca clientes que não possuem número de telefone cadastrado:
SELECT nome, cidade, telefone
FROM clientes
WHERE telefone IS NULL;

#Busca clientes que não moram em São Paulo:
SELECT nome, cidade
FROM clientes
WHERE NOT cidade = 'São Paulo'
ORDER BY nome;

#Busca clientes cujo nome começa com a letra 'A' ou contém o sobrenome 'Costa':
SELECT nome, cidade
FROM clientes
WHERE nome LIKE 'A%' OR nome LIKE '%Costa%';

/*Têm idade entre 20 e 45 anos (BETWEEN)
Moram em São Paulo ou Rio de Janeiro (IN)
Possuem telefone cadastrado (NOT + IS NULL)
O nome começa com A, B, C, D ou E (LIKE)
Ordenados pelo desconto do maior para o menor (ORDER BY)*/
SELECT nome, cidade, idade, desconto, telefone
FROM clientes
WHERE idade BETWEEN 20 AND 45
  AND cidade IN ('São Paulo', 'Rio de Janeiro')
  AND telefone IS NOT NULL
  AND (nome LIKE 'A%' OR nome LIKE 'B%' OR nome LIKE 'C%' OR nome LIKE 'D%' OR nome LIKE 'E%')
ORDER BY desconto DESC;


-- ===== EXERCÍCIO PRÁTICO: SELECT COM OPERADORES AUXILIARES =====

-- Criação da tabela de produtos
DROP TABLE IF EXISTS produtos;
CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    categoria VARCHAR(50),
    preco DECIMAL(10,2),
    estoque INT,
    fornecedor VARCHAR(100)
);

-- Inserindo os dados
INSERT INTO produtos
(nome, categoria, preco, estoque, fornecedor) VALUES
('Notebook', 'Informática', 3500.00, 10, 'TechBrasil'),
('Mouse', 'Informática', 80.00, 50, 'InfoMax'),
('Teclado', 'Informática', 150.00, 30, 'InfoMax'),
('Cadeira', 'Móveis', 650.00, 8, 'Moveis Silva'),
('Mesa', 'Móveis', 900.00, 5, 'Moveis Silva'),
('Monitor', 'Informática', 1200.00, 12, 'TechBrasil'),
('Impressora', 'Periféricos', 750.00, 7, 'PrintMais'),
('Webcam', 'Periféricos', 180.00, 0, 'PrintMais'),
('Headset', 'Periféricos', 250.00, 15, NULL),
('Smartphone', 'Telefonia', 2200.00, 20, 'TechBrasil');

-- 1) IN
SELECT * FROM produtos WHERE categoria IN ('Informática', 'Periféricos');

-- 2) BETWEEN
SELECT * FROM produtos WHERE preco BETWEEN 200 AND 1000;

-- 3) LIKE começa com M
SELECT * FROM produtos WHERE nome LIKE 'M%';

-- 4) LIKE termina com E
SELECT * FROM produtos WHERE nome LIKE '%e';

-- 5) IS NULL
SELECT * FROM produtos WHERE fornecedor IS NULL;

-- 6) IS NOT NULL
SELECT * FROM produtos WHERE fornecedor IS NOT NULL;

-- 7) AND
SELECT * FROM produtos WHERE categoria = 'Informática' AND preco > 100;

-- 8) OR
SELECT * FROM produtos WHERE categoria = 'Móveis' OR categoria = 'Telefonia';

-- 9) NOT IN
SELECT * FROM produtos WHERE categoria NOT IN ('Informática', 'Telefonia');

-- 10) Combinados
SELECT * FROM produtos WHERE estoque > 0 AND preco BETWEEN 100 AND 1000;