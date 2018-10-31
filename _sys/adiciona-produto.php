<?php
include "consulta_produto.php";
$nome_produto=$_POST['nome_produto'];
$preco_produto=$_POST['preco_produto'];
$quantidade_produto=$_POST['quantidade_produto'];
$catedoria=$_POST['categoria_id'];

//var_dump($nome_produto,$preco_produto,$quantidade_produto);
if (insereProduto($conexao,$nome_produto,$preco_produto,$quantidade_produto,$catedoria)){
    header("Location:../public/lista_produtos.php?cadastro=1");
    die();
}else{
  //header("Location:../public/form_produto.php");
?>
    <p class="alert-danger" >
<?php
    die();
}