<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir dados de funciionários - MercadoSystem</title>
</head>

<body>



<?php

include('menu.html');

?>

<!--FORMULÁRIO PARA INSERÇÃO DA MATRÍCULA PARA PESQUISA NO BANCO DE DADOS-->

    <form action="" method="post">

        <input type="text" name="matricula" placeholder="Matrícula" autocomplete="off"><br>

        <input type="submit" value="Pesquisar">

    </form>


<!--CÓDIGO PHP - LISTAR DADOS DO FUNCIONÁRIO PARA A EXCLUSÃO-->
<?php

include('conexao.php');

@$matricula = $_POST['matricula'];

$sql = mysqli_query($conectadb, "SELECT * FROM funcionario WHERE matricula = '$matricula'");

    while ($dado = mysqli_fetch_array($sql)) {

        $nome = $dado['nome'];
        $cpf = $dado['cpf'];
        $funcao = $dado['funcao'];

        echo "<br>";
        echo "MATRÍCULA: $matricula<br>";
        echo "NOME: $nome<br>";
        echo "CPF: $cpf<br>";
        echo "FUNÇÃO: $funcao<br>";
        echo "<hr>";

        echo "Deseja deletar os dados do funcionário ".$nome." (".$funcao.")?<br>";
    echo "<a href='deletar.php?matricula=".$matricula."'>Sim</a>";
    }

    echo "<br>";
    echo "<a href='excluirfunc.php'>Voltar</a>";

?>

</body>

</html>