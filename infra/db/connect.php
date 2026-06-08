<?php
    session_start(); // Inicia ou recupera a sessão do usuário

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";

    // Cria a conexão com o banco de dados
    $conn = new mysqli($host,$user,$pass,$db);

    // Teste da conexão
    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }
?>