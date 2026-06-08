<?php

include("infra/db/connect.php");
// Conecta ao banco de dados

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Verifica se o formulário foi enviado
    
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    // Recebe usuário e senha digitados

    $sql = "SELECT * FROM users 
    WHERE username = '$usuario' 
    AND password = '$senha'";
    // Procura o usuário no banco

    $resultado = $conn -> query($sql);
    // Executa a consulta

    if($resultado -> num_rows > 0){
        // Verifica se encontrou o usuário

        $_SESSION["usuario"] = $usuario;
        // Salva o usuário na sessão
        
        header("Location: public/home.php");
        // Envia para a página inicial

        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
        // Exibe mensagem de erro
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>

    <?php
    include("../public/component/table.php");
    // Exibe a tabela de usuários
    ?>

    <h2>Login com PHP</h2>

    <form method="POST">
        <!-- Formulário de login -->

        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>

        <?php
            if(isset($erro)){
                // Mostra o erro de login
                echo $erro;
            }
        ?>

        <button type="submit">Entrar</button>
    </form>

</body>
</html>