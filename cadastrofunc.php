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

    
    <div class="campos">

        <form action="incluirfunc.php" method="post">

            <input type="text" name="matricula" autocomplete="off" placeholder="Matrícula"><br>
            <input type="text" name="nome" autocomplete="off" placeholder="Nome do funcionário"><br>
            <input type="text" name="cpf" autocomplete="off" placeholder="CPF"><br>
            <input type="text" name="funcao" autocomplete="off" placeholder="Função"><br>

            <input type="submit" value="Cadastrar funcionário">

        </form>

    </div>

    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>





</body>
</html>