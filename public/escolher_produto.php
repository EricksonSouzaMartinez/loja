<?php
include "../_sys/consulta_produto.php";
include "../_sys/consulta_compra.php";
$IDProduto=$_POST['IDProduto'];
$contador=$_POST['contador'];
$IDPessoa =$_POST['IDPessoa'];


if(escolherProduto($conexao,$IDProduto,$contador)){
	if(realizarCompra($conexao,$IDPessoa,$IDProduto,$contador)){
		$_SESSION['success']="Produto comprado com sucessso";
	    header("Location:../public/lista_compra.php");
	}
}