<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários - MercadoSystem</title>
</head>

<body>

<?php

include('menu.html');

?>  
    
    <!--CÓDIGO PHP QUE PERMITE A INTERAÇÃO DA PÁGINA WEB COM O BANCO DE DADOS-->

    <?php

include('conexao.php');

$cod = $_POST['codigo'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

echo "

- Código: ".$cod."<br>
- Nome do produto: ".$nome."<br>
- Marca do produto: ".$marca."<br>
- Preço de venda: ".$preco."<br>
- Quantidade em estoque: ".$quantidade."<br>";


    $adicionar = "INSERT INTO produto(codigo, nome, marca, preco, quantidade) VALUES('".$cod."', '".$nome."', '".$marca."', '".$preco."', '".$quantidade."')";


    $inserir = mysqli_query($conectadb, $adicionar);

        if ($inserir) {
            echo "Produto cadastrado com sucesso!
            <br><a href='cadastroprod.php'>Cadastrar novo produto</a>";
        } else {
            "Erro ao cadastrar produtos.
            <br><a href='cadastroprod.php'>Tentar novamente</a>";
        }

?>

    </body>
    </html>