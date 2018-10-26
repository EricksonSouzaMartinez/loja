<?php
include "../conexao/conecta.php";
function insereProduto($conexao,$nome_produto,$preco_produto,$quantidade_produto){
    $query = "insert into Produtos(Nome_Produto, Preco_Produto, Quantidade_Produto) values
 ('{$nome_produto}',{$preco_produto},{$quantidade_produto})";

   // var_dump($query);
    return mysqli_query($conexao,$query);
}