<?php
include "consulta_produto.php";
$id=$_GET['id'];
//var_dump($id);
if (deleteProduto($conexao,$id)){
    header("Location:../public/lista_produtos.php?removido=1");
    die();
}else{
    //header("Location:../public/form_produto.php");
    ?>
    <p class="alert-danger" >
    <?php
    die();
}