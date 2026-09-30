<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $resultado = " ";
    if ($idade >= 18){
        $resultado = "Maior de idade!";
    }
    else {
        $resultado = "Menor de idade!";
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
    <h1>Verificador de idade</h1>
    <form method="POST">
    <label>Nome:</label>
    <input type="text" class="nome" id="nome" name="nome">
    
    <label>Idade:</label>
    <input type="number" class="idade" id="idade" name="idade">
    <button type="submit">Enviar</button>
    </form>

    <h2> <?= $resultado ?>  </h2>
</body>
</html>