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

O sistema está dividido em duas áreas principais: **infra** e **public**.

A pasta **infra** reúne os arquivos responsáveis pelo funcionamento interno da aplicação. Dentro dela, a pasta **db** contém o arquivo **connect.php**, utilizado para realizar a conexão com o banco de dados, e o arquivo **script.sql**, responsável pela criação do banco e das tabelas necessárias para o sistema. Também existe a pasta **redes**, que armazena outros arquivos relacionados à infraestrutura da aplicação.

A pasta **public** contém os arquivos que fazem parte da interface utilizada pelo usuário. Dentro da pasta **component**, o arquivo **navbar.php** exibe o cabeçalho da aplicação, enquanto o arquivo **table.php** apresenta a lista de usuários cadastrados.

Além disso, a pasta **public** possui o arquivo **home.php**, que corresponde à página principal exibida após o login, e o arquivo **logout.php**, responsável por encerrar a sessão do usuário.

Na estrutura o código também existe uma pasta **style.css** responsável pelo visual da página.

Na raiz do projeto encontram-se o arquivo **index.php**, utilizado como tela de login, e o arquivo **README.md**, que contém as informações e a documentação do sistema.

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
* Organização de arquivos em pastas.
* Reutilização de componentes com include().
