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

                                                    // SERVE PARA LER/ABRIR ARQUIVOS JSON

        $conteudoJson = file_get_contents(__DIR__ . "../dados/intro.json");

                                                    // SERVE PARA CONVERTER JSON PARA ARRAY PHP
                                                    // O TRUE SERVE PARA CONVERTER JSON EM UM ARRAY ASSOCIATIVO PARA O PHP LER

        $alunos = json_decode($conteudoJson, true);

                                                    // ADICIONAR O NOVO ALUNO AO ARMAZENAMENTO

        $alunos[] = $novoAluno;

                                                    // CONVERTER ARRAY PHP PARA JSON

        $jsonAtualizado = json_encode(
            $alunos,

            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE

        );

                                                    // SALVAR NO ARQUIVO JSON

        file_put_contents(__DIR__ . "../dados/intro.json", $jsonAtualizado);

        
    }

                                                    // LÊ OS ARQUICOS JSON PARA EXIBIÇÃO
                    
    $conteudoJson = file_get_contents(__DIR__ . "../dados/intro.json");

                                                    // CONVERTE O JSON PARA ARRAY PHP

    $alunos = json_decode($conteudoJson, true);

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
        <h2>Física</h2>
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
    <h1>ALUNOS CADASTRADOS</h1>

    <?php foreach ($alunos as $aluno) { ?>
        <h2> <?= $aluno["nome"]  ?> </h2>
        <p>  Idade: <?= $aluno["idade"] ?></p>

                                                        <!-- PORTUGUÊS -->

        <h2>PORTUGUÊS</h2>
        <p>Prova 1: <?= $aluno["notas"]["portugues"]["prova1"] ?></p>
        <p>Prova 2: <?= $aluno["notas"]["portugues"]["prova2"] ?></p>
        <p>Prova 3: <?= $aluno["notas"]["portugues"]["prova3"] ?></p>


                                                        <!-- MATEMÁTICA -->

        <h2>MATEMÁTICA</h2>
        <p>Prova 1: <?= $aluno["notas"]["matematica"]["prova1"] ?></p>
        <p>Prova 2: <?= $aluno["notas"]["matematica"]["prova2"] ?></p>
        <p>Prova 3: <?= $aluno["notas"]["matematica"]["prova3"] ?></p>

                                                        <!-- FÍSICA -->

        <h2>FÍSICA</h2>
        <p>Prova 1: <?= $aluno["notas"]["fisica"]["prova1"] ?></p>
        <p>Prova 2: <?= $aluno["notas"]["fisica"]["prova2"] ?></p>
        <p>Prova 3: <?= $aluno["notas"]["fisica"]["prova3"] ?></p>
        

    <?php } ?>



    
</body>
</html>