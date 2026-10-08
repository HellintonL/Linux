<?php

    require_once "funcoes.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];

        $media = calcularMedia($nota1, $nota2);

        $situacao = verificarStatus($media);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no Front</title>
</head>
<body>
    <form method="post">
        nota1
        <input type="text" name = "nota1">
        
        nota2
        <input type="text" name = "nota2">

        <br><br>

        <button type="submit">Enviar</button>

    </form>
    <h2><?= $situacao ?></h2>
</body>
</html>