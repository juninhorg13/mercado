<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca Refinada de Funcionários - MercadoSystem</title>
</head>

<body>

    <!--TOPO DO SITE COM MENU DE OPÇÕES-->
    <div class="topo">
        <h1>Busca Refinada de Funcionários - MercadoSystem</h1>
        <p>Nesta seção será possível localizar dados de funcionários através da matrícula</p>


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

    <form action="funcaobuscarfunc.php" method="post">
        
        <input type="text" autocomplete="off" placeholder="Matrícula">

        <input type="submit" value="Buscar funcionário">

    </form>

    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>


</body>
</html>