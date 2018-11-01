<?php
include "consulta_produto.php";
$nome_produto=$_POST['nome_produto'];
$preco_produto=$_POST['preco_produto'];
$quantidade_produto=$_POST['quantidade_produto'];
$catedoria=$_POST['categoria_id'];
if (array_key_exists('usado',$_POST)){
    $usado="true";
}else{
    $usado="false";
}
//var_dump($nome_produto,$preco_produto,$quantidade_produto);
if (insereProduto($conexao,$nome_produto,$preco_produto,$quantidade_produto,$catedoria,$usado)){
    header("Location:../public/lista_produtos.php?cadastro=1");
    die();
}else{
  //header("Location:../public/form_produto.php");
?>
    <p class="alert-danger" >
<?php
    die();
}