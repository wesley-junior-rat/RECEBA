DROP DATABASE IF EXISTS aula; # apago o banco de dados se existir
CREATE DATABASE aula; # cria o bando de dados
USE aula; # define o banco de dados de trabalho

# cria uma tabela usuario
CREATE TABLE usuario (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
    senha VARCHAR(64) NOT NULL,
    nivel CHAR(1) NOT NULL DEFAULT 'u',
    PRIMARY KEY(id)
);

# insere dados na tabela usuario
INSERT INTO usuario 
(nome, email, senha, nivel)
VALUES
('Admin', 'admin@local.com', SHA1('123456'), 'A'),
('User' , 'user@local.com' , SHA1('123456'), 'U');

# lista os dados da tabela usuario
SELECT * FROM usuario;
