<?php

    $nome = $_POST["nome"];
    $nascimento = $_POST["idade"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $resultado = " ";

    if ($nascimento >= 18){
        $resultado = "Cadastro realizado com sucesso!";
    }
    else {
        $resultado = "Precisa de permição dos pais!";
    }    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de idade</title>
    <link rel="stylesheet" href="idade.css">
    <nav>
        <a href="index.php">Inicio</a>
    </nav>
</head>
<body>
    <h1>Sistema de cadastro</h1>
    <form method="POST">
    <label>Nome:</label>
    <input type="text" class="nome" id="nome" name="nome">
    
    <label>Dada de nascimento:</label>
    <input type="number" class="nascimento" id="nascimento" name="nascimento">

    <label>Email</label>
    <input type="email" class="email" id="email" name="email">

    <label>Senha</label>
    <input type="text" class="senha" id="senha" name="senha">

    <button type="submit">Enviar</button>
    </form>

    <h2> <?= $resultado ?>  </h2>
</body>
</html>