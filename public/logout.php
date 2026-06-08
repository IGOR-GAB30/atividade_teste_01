<?php
    session_start();
    // Inicia a sessão

    session_destroy();
    // Remove os dados da sessão

    header("Location: ../index.php");
    // Retorna para a tela de login

    exit();
?>