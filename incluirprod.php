    <!--CÓDIGO PHP QUE PERMITE A INTERAÇÃO DA PÁGINA WEB COM O BANCO DE DADOS-->

    <?php

include('conexao.php');


$cod = $_POST['codigo'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];


echo "

- Código: ".$cod."<br>
- Nome do produto: ".$nome."<br>
- Marca do produto: ".$marca."<br>
- Preço de venda: ".$preco."<br>
- Quantidade em estoque: ".$quantidade."<br>";


    $adicionar = "INSERT INTO produto(codigo, nome, marca, preco, quantidade) VALUES('".$cod."', '".$nome."', '".$marca."', '".$preco."', '".$quantidade."')";


    $inserir = mysqli_query($conectadb, $adicionar);

        if ($inserir) {
            echo "Produto cadastrado com sucesso!
            <br><a href='cadastroprod.php'>Cadastrar novo produto</a>";
        } else {
            "Erro ao cadastrar produtos.
            <br><a href='cadastroprod.php'>Tentar novamente</a>";
        }

?>