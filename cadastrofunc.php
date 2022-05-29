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
        <p>Nesta seção será possível o cadastro de funcionários</p>


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