<?php require_once "../consultas/consulta_produto.php";
require_once "../_sys/logica_usuario.php";
require_once "../classes/Produto.php";
$produto = new Produto();
verificaUsuario();
$produto->id=$_POST['id'];

if (inativaProduto($conexao,$produto)){
   header("Location:../public/lista_produtos.php");
    die();
}else{
    header("Location:../public/form_produto.php");
    ?>
    <p class="alert-danger" >
    <?php
    die();
}