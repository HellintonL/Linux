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
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <label>Nome:</label>
    <input type="text" class="nome" id="nome" name="nome">
    
    <label>Idade:</label>
    <input type="number" class="idade" id="idade" name="idade">
    </form>
</body>
</html>