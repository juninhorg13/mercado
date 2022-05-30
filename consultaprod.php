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

<?php

include('conexao.php');

$sql = mysqli_query($conectadb, "SELECT * FROM produto");

    while ($dado = mysqli_fetch_array($sql)) {
        
        $codigo = $dado['codigo'];
        $nome = $dado['nome'];
        $marca = $dado['marca'];
        $preco = $dado['preco'];
        $quantidade = $dado['quantidade'];

        echo "CÓDIGO: $codigo<br>";
        echo "PRODUTO: $nome<br>";
        echo "MARCA: $marca<br>";
        echo "VALOR: $preco<br>";
        echo "QUANTIDADE EM ESTOQUE: $quantidade<br>";
        echo "<hr>";

    }

?>

    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>

</body>
</html>