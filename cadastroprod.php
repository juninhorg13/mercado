<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos - MercadoSystem</title>
</head>

<body>

    <!--TOPO DO SITE COM MENU DE OPÇÕES-->
    <div class="topo">
        <h1>Cadastro de Produtos - MercadoSystem</h1>
        <p>Nesta seção será possível o cadastro de produtos</p>


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

    <!--CAMPOS DE INSERÇÃO DE DADOS PARA CADASTRO-->

    <div class="campos">

        <form action="incluirprod.php" method="post" autocomplete="false">

            <input type="text" name="codigo" autocomplete="off" placeholder="Informe o código"><br>
            <input type="text" name="nome" autocomplete="off" placeholder="Nome do produto"><br>
            <input type="text" name="marca" autocomplete="off" placeholder="Marca do produto"><br>
            <input type="number" name="preco" autocomplete="off" placeholder="Preço de venda"><br>
            <input type="number" name="quantidade" autocomplete="off" placeholder="Quantidade em estoque"><br>

            <input type="submit" value="Cadastrar produto">

        </form>

    </div>

    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>

</body>

</html>