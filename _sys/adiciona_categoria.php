<?php
include "consulta_categoria.php";
$categoria=$_POST['categoria'];
if(insereCategoria($conexao,$categoria)){
header("Location: ../public/form_produto.php");
die();
}
