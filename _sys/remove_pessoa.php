<?php
include "consulta_pessoa.php";
$id=$_POST['id'];
//var_dump($id);
if (deletePessoa($conexao,$id)){
    header("Location:../public/lista_pessoas.php?removido=1");
    die();
}else{
    //header("Location:../public/form_produto.php");
    ?>
    <p class="alert-danger" >
    <?php
    die();
}