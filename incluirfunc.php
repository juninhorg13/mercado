<?php

include('conexao.php');

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];

echo "

- Matrícula: ".$matricula."<br>
- Nome do funcionário: ".$nome."<br>
- CPF: ".$cpf."<br>
- Função: ".$funcao."<br>";

$adicionar = "INSERT INTO funcionario(matricula, nome, cpf, funcao) VALUES('".$matricula."', '".$nome."', '".$cpf."', '".$funcao."')";

$inserir = mysqli_query($conectadb, $adicionar);

if ($inserir) {
    echo "Funcionário ".$nome." cadastrado com sucesso!
    <br><a href='cadastrofunc.php'>Cadastrar novo funcionário</a>";
} else {
    "Erro ao cadastrar funcionário.
    <br><a href='cadastrofunc.php'>Tentar novamente</a>";
}


?>