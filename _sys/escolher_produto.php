<?php
require_once "../consultas/consulta_produto.php";
require_once "../consultas/consulta_compra.php";
$IDProduto=$_POST['IDProduto'];
$contador=$_POST['nameContador'];
$IDPessoa =$_POST['IDPessoa'];

var_dump($contador,$IDPessoa,$IDProduto);
if(escolherProduto($conexao,$IDProduto,$contador)){
    if (buscaProduto($conexao,$IDProduto)){
    $valores = buscaValor($conexao,$IDProduto);
    foreach ($valores as $valor):
        $valor_total = ($valor * $contador);
             if (realizarCompra($conexao, $IDPessoa, $IDProduto, $contador,$valor_total)) {
                  $_SESSION['success'] = "Produto comprado com sucessso";
                  header("Location:../public/lista_compra.php");

    }
    endforeach;
    }
}