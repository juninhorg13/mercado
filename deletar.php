<?php

include('conexao.php');

$matricula = $_GET['matricula'];

echo "Deletando os dados do funcionário cuja matrícula é <b>".$matricula."</b></br></br>";

    $query = "DELETE FROM funcionario WHERE matricula = '$matricula'";

    $apaga = $conectadb -> query($query);

        if ($apaga) {
            echo "<b>Os dados foram deletados com sucesso.</b><br>";
        } else {
            echo "Erro ao excluir dados do funcionário.<br>
            <a href='excluirfunc.php'>Voltar</a>";
        }

?>