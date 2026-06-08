<?php
    session_start();
    // Inicia a sessão

    session_destroy();
    // Remove todos os dados da sessão

    header("location: ../index.php");
    // Retorna para a tela de login

    exit();
?>