<?php
require_once "../consultas/consulta_produto.php";
include "../_sys/logica_usuario.php";
verificaUsuario();
$id=$_POST['id'];
$nome_produto=$_POST['nome_produto'];
$preco_produto=$_POST['preco_produto'];
$quantidade_produto=$_POST['quantidade_produto'];
$catedoria=$_POST['categoria_id'];
if (array_key_exists('usado',$_POST)){
$usado="1";
}else{
    $usado="0";
}
var_dump($id,$nome_produto,$preco_produto,$quantidade_produto,$catedoria,$usado);
if (editaProduto($conexao,$id,$nome_produto,$preco_produto,$quantidade_produto,$catedoria,$usado)){
    header("Location:../public/lista_produtos.php?cadastro=1");
    die();
}else{
  //header("Location:../public/form_produto.php");
?>
    <p class="alert-danger" >
<?php
    die();
}