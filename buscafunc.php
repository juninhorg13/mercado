<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca Refinada de Funcionários - MercadoSystem</title>
</head>

<body>

<?php

include('menu.html');

?>

    <form class="d-flex" action="funcaobuscarfunc.php" method="post">
        
        <input type="text" autocomplete="off" placeholder="Matrícula">

        <input class="btn btn-outline-primary" type="submit" value="Buscar funcionário">

    </form>

<hr>

    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>


</body>
</html>