<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeProduto = $_POST["nomeProduto"];
        $categoria = $_POST["categoria"];
        $marca = $_POST["marca"];
        $preco = $_POST["preco"];
        $quantidadeEstoque = $_POST["quantidadeEstoque"];

        $nomeFabricante = $_POST["nomeFabricante"];
        $paisOrigem = $_POST["paisOrigem"];

                                                    // ORGANIZA OS DADOS DE UM NOVO PRODUTO

        $novoProduto = [
            "produto" => [
                "nomeProduto" => $nomeProduto,
                "categoria" => $categoria,
                "marca" => $marca,
                "preco" => $preco,
                "quantidadeEstoque" => $quantidadeEstoque
            ],

            "fabricante" => [
                "nomeFabricante" => $nomeFabricante,
                "paisOrigem" => $paisOrigem
            ],
                 
        ];  

                                                    // LÊ O ARQUIVO JSON EXISTENTE
        $caminhoArquivo = (__DIR__ . "dados/produtos.json");

        $conteudoJson = file_get_contents($caminhoArquivo);

                                                    // CONVERTE JSON PARA ARRAY PHP

        $produtos = json_decode($conteudoJson, true);

                                                    // ADICIONA O NOVO PRODUTO AO ARMAZENAMENTO

        $produtos[] = $novoProduto;

                                                    // CONVERTE ARRAY PHP PARA JSON

        $jsonAtualizado = json_encode($produtos, 
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

                                                    // SALVAR NO ARQUIVO JSON

        $conteudoJson = file_put_contents(__DIR__ . "dados/produtos.json", $jsonAtualizado);

    }

                                                    // LÊ OS ARQUIVOS JSON PARA EXIBIÇÃO

    $conteudoJson = file_get_contents(__DIR__ . "dados/produtos.json");

                                                    // CONVERTE O JSON PARA ARRAY PHP

    $produtos = json_decode($conteudoJson, true);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>CADASTRO DE PRODUTOS</h1>
    <form method = "POST">
    <label>Nome do Produto: </label>
    <input type="text" name = "nomeProduto" required>
    <br>
    <label>Categoria: </label>
    <input type="text" name = "categoria" required>
    <br>
    <label>Marca: </label>
    <input type="text" name = "marca" required>
    <br>
    <label>Preço: </label>
    <input type="number" name = "preco" min = "0" required>
    <br>
    <label>Quantidade em Estoque: </label>
    <input type="number" name = "quantidadeEstoque" min = "0" required>
    <br>

    <h2>FABRICANTE</h2>
    <label>INFORMAÇÕES DO FABRICANTE: </label>
    <input type="text" name = "nomeFabricante" required>
    <br>
    <label>País de Origem: </label>
    <input type="text" name = "paisOrigem" required>
    <br>    
    <button type="submit">Enviar</button>
    </form>

    <h1>PRODUTOS CADASTRADOS</h1>
    <?php foreach($produtos as $produto) { ?>
        <h2> <?= $produto["nomeProduto"] ?> </h2>
        <p>Produto: <?= $produto["produtos"]["nomeProduto"] ?></p>
        <p>categoria: <?= $produto["produtos"]["caregoria"] ?></p>
        <p>Marca: <?= $produto["produtos"]["marca"] ?></p>
        <p>Preço: <?= $produto["produtos"]["preco"] ?></p>
        <p>Quantidade em Estoque: <?= $produto["pudutos"]["quantidadeEstoque"] ?></p>
        <p>Nome do Fabricante: <?= $produto["fabricante"]["nomeFabricante"] ?></p>
        <p>País de Origem: <?= $produto["fabricante"]["paisOrigem"] ?></p>

    <?php } ?>
</body>
</html>