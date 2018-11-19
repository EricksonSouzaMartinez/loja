<?php
require_once "../consultas/consulta_produto.php";
require_once "../consultas/consulta_compra.php";
require_once "../classes/Produto.php";
$produto = new Produto();
$produto->id=$_POST['IDProduto'];
$contador=$_POST['nameContador'];
$IDPessoa =$_POST['IDPessoa'];

if(escolherProduto($conexao,$produto,$contador)){
    if (buscaProduto($conexao,$produto)){
    $valores = buscaValor($conexao,$produto);
    foreach ($valores as $valor):
        $valor_total = ($valor * $contador);
             if (realizarCompra($conexao, $IDPessoa, $produto, $contador,$valor_total)) {
                  $_SESSION['success'] = "Produto comprado com sucessso";
                  header("Location:../public/lista_compra.php");

    }
    endforeach;
    }
}