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

$sql = mysqli_query($conectadb, "SELECT * FROM funcionario");

    while ($dado = mysqli_fetch_array($sql)) {
        
        $matricula = $dado['matricula'];
        $nome = $dado['nome'];
        $cpf = $dado['cpf'];
        $funcao = $dado['funcao'];

        echo "MATRÍCULA: $matricula<br>";
        echo "NOME: $nome<br>";
        echo "CPF: $cpf<br>";
        echo "FUNÇÃO: $funcao<br>";
        echo "<hr>";

    }

?>

<footer>
<p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
</footer>

</body>
</html>