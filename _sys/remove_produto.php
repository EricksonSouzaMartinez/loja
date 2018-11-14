<?php
require_once "../consultas/consulta_produto.php";
include "../_sys/logica_usuario.php";
verificaUsuario();
$id=$_POST['id'];
//var_dump($id);
if (inativaProduto($conexao,$id)){
    header("Location:../public/lista_produtos.php?removido=1");
    die();
}else{
    //header("Location:../public/form_produto.php");
    ?>
    <p class="alert-danger" >
    <?php
    die();
}