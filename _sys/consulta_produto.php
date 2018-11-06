<?php
include "../conexao/conecta.php";

function insereProduto($conexao,$nome_produto,$preco_produto,$quantidade_produto,$categoria,$usado){
    $nome_produto= mysqli_real_escape_string($conexao, $nome_produto);
    $preco_produto= mysqli_real_escape_string($conexao, $preco_produto);
    $quantidade_produto= mysqli_real_escape_string($conexao, $quantidade_produto);
    $categoria= mysqli_real_escape_string($conexao, $categoria);
    $usado= mysqli_real_escape_string($conexao, $usado);

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

function mostraProdutosHaVenda($conexao){
    $produtos=array();
    $resultado=mysqli_query($conexao,"select p.*,c.Nome_categoria as categoria_nome from 
Produtos as p join Categorias as c on c.id=p.categoria_id where p.  Quantidade_Produto != 0");
    while ($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos,$produto);
    }
    return $produtos;
}

function deleteProduto($conexao,$id){
    $query="delete from Produtos where IDProduto = {$id}";
    return mysqli_query($conexao,$query);
}

function buscaProduto($conexao,$id){
    $query = "select * from Produtos where IDProduto={$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function editaProduto($conexao,$id,$nome_produto,$preco_produto,$quantidade_produto,$categoria,$usado){
    $query="update Produtos set Nome_Produto='{$nome_produto}', Preco_Produto={$preco_produto}
,Quantidade_Produto={$quantidade_produto},categoria_id={$categoria},usado='{$usado}' where IDProduto ={$id}";
    return mysqli_query($conexao, $query);
   // var_dump($query);
}

function escolherProduto($conexao,$id,$contador){
    $query = quantidadeEscolhida($conexao,$id);
        $valor = ($query['Quantidade_Produto']);

    if ($contador>$valor) {
        $_SESSION['danger']="Escolha quantidade menor ou igual o estoque";
        header("Location:../public/produtoA_vender.php");
    }

    if ($contador<=$valor){
        $compra = $valor - $contador;
        $resultado = "update Produtos set Quantidade_Produto = '{$compra}' WHERE IDProduto={$id}";
        return mysqli_query($conexao,$resultado);
    }    
    
}

function quantidadeEscolhida($conexao,$id){
    $query = "SELECT Quantidade_Produto FROM Produtos WHERE IDProduto={$id}";
    $resultado = mysqli_query($conexao,$query);
    return mysqli_fetch_assoc($resultado);
}