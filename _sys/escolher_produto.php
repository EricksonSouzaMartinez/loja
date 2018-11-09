<?php
include "../_sys/consulta_produto.php";
include "../_sys/consulta_compra.php";
$IDProduto=$_POST['IDProduto'];
$contador=$_POST['contador'];
$IDPessoa =$_POST['IDPessoa'];



if(escolherProduto($conexao,$IDProduto,$contador)){
    $valores = buscaValor($conexao,$IDProduto);
    foreach ($valores as $valor):
        $valor_total = ($valor * $contador);
        var_dump($valor_total);
              if (realizarCompra($conexao, $IDPessoa, $IDProduto, $contador,$valor_total)) {
            $_SESSION['success'] = "Produto comprado com sucessso";
	    header("Location:../public/lista_compra.php");

    }
    endforeach;
}