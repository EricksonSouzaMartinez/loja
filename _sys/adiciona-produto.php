<?php
require_once "../consultas/consulta_produto.php";
include "../_sys/logica_usuario.php";
require_once "../classes/Produto.php";
require_once "../classes/Categoria.php";
verificaUsuario();
$produto = new Produto();
$categoria = new Categoria();
$produto->nome_produto=$_POST['nome_produto'];
$produto->preco_produto=$_POST['preco_produto'];
$produto->quantidade_produto=$_POST['quantidade_produto'];
$produto->categoria=$categoria->id =$_POST['categoria_id'];


if (array_key_exists('usado',$_POST)){
    $produto->usado="true";
}else{
    $produto->usado="false";
}
//var_dump($produto->nome_produto,$produto->preco_produto,$produto->quantidade_produto,$produto->categoria);
if (insereProduto($conexao, $produto)){
    header("Location:../public/lista_produtos.php");
    die();
}else{
header("Location:../public/form_produto.php");
?>
    <p class="alert-danger" >
<?php
    die();
}