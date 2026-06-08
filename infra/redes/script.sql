CREATE DATABASE sistema_simples;
-- Cria o banco de dados

USE sistema_simples;
-- Seleciona o banco

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY;
    usuario VARCHAR(255) NOT NULL;
    senha VARCHAR(255) NOT NULL;
);
-- Cria a tabela de usuários

INSERT INTO usuario (usuario, senha) VALUES ('admin','1234');
-- Insere um usuário padrão