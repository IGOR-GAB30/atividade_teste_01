<?php
    session_start();
    // Inicia a sessão

    if(!isset($_SESSION["usuario"])){
        herader("location: ../index.php");
        // Redireciona se não estiver logado
        exit();
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<h2>Bem vindo!</h2>

<p>Usuário logado:
    <?php echo $_SESSION["usuario"];?>
    <!-- Exibe o usuário autenticado -->
</p>

<a href="logout.php">Sair</a>
<!-- Encerra a sessão -->

</body>
</html>