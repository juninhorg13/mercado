<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários - MercadoSystem</title>
</head>

<body>

    <!--TOPO DO SITE COM MENU DE OPÇÕES-->
    <div class="topo">
        <h1>Cadastro de Funcionários - MercadoSystem</h1>
        <p>Nesta seção será possível o cadastro de produtos e funcionários</p>


        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="cadastroprod.php">Cadastrar produtos</a></li>
                <li><a href="consultaprod.php">Consultar todos produtos</a></li>
                <li><a href="buscaprod.php">Buscar produto</a></li>
                <li><a href="#">Editar produtos</a></li>
                <li><a href="#">Excluir produtos</a></li>
                <li><a href="cadastrofunc.php">Cadastrar funcionários</a></li>
                <li><a href="consultafunc.php">Consultar funcionários</a></li>
                <li><a href="buscafunc.php">Buscar funcionario</a></li>
                <li><a href="#">Editar funcionários</a></li>
                <li><a href="#">Excluir funcionários</a></li>
                <li>
                    <a href="#"></a>
                </li>
            </ul>
        </nav>
    </div>

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