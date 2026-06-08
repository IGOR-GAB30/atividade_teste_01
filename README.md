# atividade_teste_01

# Sistema Simples de Login

## Objetivo

Este projeto é um sistema simples de login desenvolvido em PHP. Ele permite que usuários façam login, visualizem uma página protegida e cadastrem novos usuários.

## Tecnologias Utilizadas

* PHP
* MySQL
* HTML
* CSS

## Estrutura dos Arquivos

* **index.php** → Tela de login.
* **connect.php** → Conexão com o banco de dados.
* **home.php** → Página acessada após o login.
* **logout.php** → Encerra a sessão do usuário.
* **navbar.php** → Cabeçalho da aplicação.
* **table.php** → Exibe os usuários cadastrados.
* **style.css** → Estilização da página.
* **script.sql** → Criação do banco de dados e tabelas.

## Como o Sistema Funciona

1. O usuário informa login e senha.
2. O sistema consulta os dados no banco.
3. Se os dados estiverem corretos, uma sessão é criada.
4. O usuário é direcionado para a página Home.
5. Na Home é possível cadastrar novos usuários.
6. Os usuários cadastrados são exibidos em uma tabela.
7. Ao clicar em "Sair", a sessão é encerrada.

## Aprendizados Obtidos

* Utilização de sessões em PHP.
* Conexão com banco de dados MySQL.
* Criação e execução de consultas SQL.
* Uso de formulários HTML.
* Organização de arquivos em pastas.
* Reutilização de componentes com include().
