<?php
include "../conexao/conecta.php";
function insereProduto($conexao,$nome_produto,$preco_produto,$quantidade_produto){
    $query = "insert into Produtos(Nome_Produto, Preco_Produto, Quantidade_Produto) values ('{$nome_produto}',{$preco_produto},{$quantidade_produto})";
     return mysqli_query($conexao,$query);
}

function mostraProdutos($conexao){
    $produtos=array();
    $resultado=mysqli_query($conexao,"select * from Produtos");
    while ($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos,$produto);
    }
    return $produtos;
}

function deleteProduto($conexao,$id){
    $query="delete from Produtos where IDProduto = {$id}";
    return mysqli_query($conexao,$query);

}