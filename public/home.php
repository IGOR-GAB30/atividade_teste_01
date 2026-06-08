<?php
    include("../infra/db/connect.php");
    // Importa a conexão com o banco

    if(!isset($_SESSION["usuario"])){
        // Verifica se existe sessão ativa

        header("Location: ../index.php");
        exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Executa ao enviar o formulário

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        // Recebe os dados informados

        $sql = "INSERT INTO users (username, password) VALUES ('$usuario','$senha')";
        // Monta o comando de inserção

        if($conn -> query($sql) === TRUE){
            // Verifica se o cadastro foi realizado

            echo "<script>alert('Usuário Cadastrado com sucesso!')</script>";
        }else{
            echo "<script>alert('Erro Usuário Não Cadastrado!')</script>";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="../style/style.css">
    <!-- Importa o CSS -->
</head>
<body>

    <?php
        include("../public/component/navbar.php");
        // Exibe o cabeçalho
    ?>

    <h2>Bem-vindo!</h2>

    <p> Usuário logado:
        <?php echo $_SESSION["usuario"];?>
        <!-- Mostra o usuário da sessão -->
    </p>

    <h4>Cadastrar Novo Usuário</h4>

    <form method="POST">
        <!-- Formulário de cadastro -->

        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">

        <br>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha">

        <br>
        <br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
        include("../public/component/table.php");
        // Exibe a tabela de usuários
    ?>

    <a href="logout.php">Sair</a>
    <!-- Finaliza a sessão -->

</body>
</html>