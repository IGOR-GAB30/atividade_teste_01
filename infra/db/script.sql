CREATE DATABASE sistema_simples;
-- Cria o banco de dados

USE sistema_simples;
-- Seleciona o banco criado

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
-- Cria a tabela de usuários

INSERT INTO usuario (usuario, senha) VALUE ('admin','123');
-- Insere um usuário inicial