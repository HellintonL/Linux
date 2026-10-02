<?php
                                                        //VERIFICA SE O FORMULÁRIO FOI ENVIADO USANDO O MÉTODO POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        $portugues_prova1 = $_POST["portugues_prova1"];
        $portugues_prova2 = $_POST["portugues_prova2"];
        $portugues_prova3 = $_POST["portugues_prova3"];

        $matematica_prova1 = $_POST["matematica_prova1"];
        $matematica_prova2 = $_POST["matematica_prova2"];
        $matematica_prova3 = $_POST["matematica_prova3"];

        $fisica_prova1 = $_POST["fisica_prova1"];
        $fisica_prova2 = $_POST["fisica_prova2"];
        $fisica_prova3 = $_POST["fisica_prova3"];

                                                        //ORGANIZA OS DADOS EM UM ARRAY
        $novoAluno = [
            "nome" => $nome, 
            "idade" => $idade,

            "notas" => [
                "portugues" => [
                    "prova1" => $portugues_prova1,
                    "prova2" => $portugues_prova2,
                    "prova3" => $portugues_prova3,
                ],

                "matematica" => [
                    "prova1" => $matematica_prova1,
                    "prova2" => $matematica_prova2,
                    "prova3" => $matematica_prova3,
                ],

                "fisica" => [
                    "prova1" => $fisica_prova1,
                    "prova2" => $fisica_prova2,
                    "prova3" => $fisica_prova3,
                ],
            ]
        ];

        echo "<h2> DADOS RECEBIDOS </h2>";

        echo "Nome: " . $nome . "<br";
        echo "Idade:" . $idade . "<br><br>";

        echo "<strong>Português:</strong><br>";
        echo "Prova 1: " . $portugues_prova1 . "<br>";
        echo "Prova 2: " . $portugues_prova2 . "<br>";
        echo "Prova 3: " . $portugues_prova3 . "<br>";
        "<br><br>";

        echo "<strong>Português:</strong><br>";
        echo "Prova 1: " . $matematica_prova1 . "<br>";
        echo "Prova 2: " . $matematica_prova2 . "<br>";
        echo "Prova 3: " . $matematica_prova3 . "<br>";
        "<br><br>";

        echo "<strong>Português:</strong><br>";
        echo "Prova 1: " . $fisica_prova1 . "<br>";
        echo "Prova 2: " . $fisica_prova2 . "<br>";
        echo "Prova 3: " . $fisica_prova3 . "<br>";
        "<br><br>";
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
    <h1>CADASTRO DE NOTAS</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br><br>
        <label>Idade:</label>
        <input type="number" name="idade" required>
        <h2>Português</h2>
        <label>Prova 1:</label>
        <input type="number" name="portugues_prova1" min="0" max="10" step="0.1" required>
        <br><br>
        <label>Prova 2</label>
        <input type="number" name="portugues_prova1" min="0" max="10" step="0.1" required>
        <br><br>
        <label>Prova 3:</label>
        <input type="number" name="portugues_prova1" min="0" max="10" step="0.1" required>
        <br><br>
        <h2>Matemática</h2>
        <label>Prova 1:</label>
        <input type="number" name="matematica_prova1" min="0" max="10" step="0.1" required>
        <br><br>
        <label>Prova 2:</label>
        <input type="number" name="matematica_prova1" min="0" max="10" step="0.1" required>
        <br><br>
        <label>Prova 3:</label>
        <input type="number" name="matematica_prova1" min="0" max="10" step="0.1" required>
        <br><br>
        <label>Física</label>
        <label>Prova 1:</label>
        <input type="number" name="fisica_prova1" min="0" max="10" step="0.1" required>
        <br><br>
        <label>Prova 2:</label>
        <input type="number" name="fisica_prova1" min="0" max="10" step="0.1" required>
        <br><br>
        <label>Prova 3:</label>
        <input type="number" name="fisica_prova1" min="0" max="10" step="0.1" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>