<?php
include "../conexao/conecta.php";
function insereProduto($conexao,$nome_produto,$preco_produto,$quantidade_produto,$categoria,$usado){
    $query = "insert into Produtos(Nome_Produto, Preco_Produto, Quantidade_Produto,categoria_id,usado)
 values ('{$nome_produto}',{$preco_produto},{$quantidade_produto},{$categoria},$usado)";
     return mysqli_query($conexao,$query);
}

function mostraProdutos($conexao){
    $produtos=array();
    $resultado=mysqli_query($conexao,"select p.*,c.Nome_categoria as categoria_nome from 
Produtos as p join Categorias as c on c.id=p.categoria_id order by p.IDProduto asc ");
    while ($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos,$produto);
    }
    return $produtos;
}

function deleteProduto($conexao,$id){
    $query="delete from Produtos where IDProduto = {$id}";
    return mysqli_query($conexao,$query);
}