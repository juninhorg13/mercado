<?php

include('conexao.php');

@$matricula = $_POST['matricula'];

    $sql = mysqli_query($conectadb, "SELECT * FROM funcionario WHERE matricula = '$matricula'");

    while($dado = mysqli_fetch_array($sql)) {

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

    echo "<br>";
    echo "<a href='buscafunc.php'>Nova pesquisa</a>";

?>