<?php
require_once "../consultas/consulta_produto.php";
require_once "../_sys/logica_usuario.php";
require_once "../classes/Categoria.php";
require_once "../classes/Produto.php";

verificaUsuario();
$catedoria = new Categoria();
$produto = new Produto();

$produto->id=$_POST['id'];
$produto->nome_produto=$_POST['nome_produto'];
$produto->preco_produto=$_POST['preco_produto'];
$produto->quantidade_produto=$_POST['quantidade_produto'];
$produto->categoria=$categoria->id=$_POST['categoria_id'];

if (array_key_exists('usado',$_POST)){
$produto->usado="1";
}else{
    $produto->usado="0";
}
var_dump($produto->id,$produto->nome_produto,$produto->preco_produto,$produto->quantidade_produto,$produto->categoria,$produto->usado);
if (editaProduto($conexao,$produto)){
    header("Location:../public/lista_produtos.php?cadastro=1");
    die();
}else{
  header("Location:../public/form_produto.php");
?>
    <p class="alert-danger" >
<?php
    die();
}