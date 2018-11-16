<?php
require_once "../conexao/conecta.php";
require_once "../classes/Produto.php";
require_once "../classes/Categoria.php";

function insereProduto($conexao,Produto $produto){
    $produto->nome_produto= mysqli_real_escape_string($conexao, $produto->nome_produto);
    $produto->preco_produto= mysqli_real_escape_string($conexao, $produto->preco_produto);
    $produto->quantidade_produto= mysqli_real_escape_string($conexao, $produto->quantidade_produto);
    $produto->categoria= mysqli_real_escape_string($conexao, $produto->categoria);
    $produto->usado= mysqli_real_escape_string($conexao, $produto->usado);

    $query = "insert into Produtos (Nome_Produto, Preco_Produto, Quantidade_Produto,categoria_id,usado)
 values ('{$produto->nome_produto}',{$produto->preco_produto},{$produto->quantidade_produto},{$produto->categoria},$produto->usado)";
    return mysqli_query($conexao,$query);
}

function mostraProdutos($conexao){
    $produtos=array();
    $resultado=mysqli_query($conexao, "select p.*,c.Nome_categoria as categoria_nome from 
Produtos as p join Categorias as c on c.ct_id=p.categoria_id where ct_ativo != 0 order by p.IDProduto asc ");
    while ($produto_array = mysqli_fetch_assoc($resultado)){
    $produto = new Produto();
    $categoria = new Categoria();
        $categoria->nome = $produto_array['categoria_nome'];
        $produto->id=$produto_array['IDProduto'];
        $produto->nome_produto = $produto_array['Nome_Produto'];
        $produto->preco_produto =$produto_array['Preco_Produto'];
        $produto->quantidade_produto = $produto_array['Quantidade_Produto'];
        $produto->categoria = $categoria;
        $produto->usado = $produto_array['usado'];

    array_push($produtos,$produto);
    }
    return $produtos;
}

function buscaValor($conexao,$IDProduto){
    $query = "select Preco_Produto from Produtos where IDProduto={$IDProduto}";
    $resultado = mysqli_query($conexao,$query);
    return mysqli_fetch_assoc($resultado);
}

function mostraProdutosHaVenda($conexao){
    $produtos=array();
    $resultado=mysqli_query($conexao, "select p.*,c.Nome_categoria as categoria_nome from 
Produtos as p join Categorias as c on c.ct_id=p.categoria_id where p.Quantidade_Produto != 0");
    while ($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos,$produto);
    }
    return $produtos;
}

function inativaProduto($conexao,$id){
    $query="UPDATE Produtos set pr_ativo = 0 where IDProduto = {$id}";
    return mysqli_query($conexao,$query);
}

function buscaProduto($conexao, Produto $produto){

    $query = "select * from Produtos where IDProduto={$produto->id}";
    $resultado = mysqli_query($conexao, $query);

    $resultado_array = mysqli_fetch_assoc($resultado);

    $produto = new Produto();
    $produto->id=$resultado_array['IDProduto'];
    $produto->nome_produto = $resultado_array['Nome_Produto'];
    $produto->preco_produto =$resultado_array['Preco_Produto'];
    $produto->quantidade_produto = $resultado_array['Quantidade_Produto'];
    $produto->categoria = $resultado_array['categoria_id'];
    $produto->usado = $resultado_array['usado'];

    return $produto;
}

function editaProduto($conexao, Produto $produto){
    var_dump($produto);
    $query="update Produtos set Nome_Produto='{$produto->nome_produto}', Preco_Produto={$produto->preco_produto}
,Quantidade_Produto={$produto->quantidade_produto},categoria_id={$produto->categoria},usado='{$produto->usado}' where IDProduto ={$produto->id}";
    return mysqli_query($conexao, $query);

}

function escolherProduto($conexao,$id,$contador){
        $query=quantidadeEscolhida($conexao,$id);
        $estoque=($query['Quantidade_Produto']);
        if($contador>$estoque) {
        $_SESSION['danger']="Escolha quantidade menor ou igual o estoque";
        header("Location:../public/produtoA_vender.php");
    }
    if ($contador<=$estoque){
        $compra=$estoque - $contador;
        $resultado="update Produtos set Quantidade_Produto = '{$compra}' WHERE IDProduto={$id}";
        return mysqli_query($conexao,$resultado);
    }    
    
}

function quantidadeEscolhida($conexao,$id){
    $query="SELECT Quantidade_Produto FROM Produtos WHERE IDProduto={$id}";
    $resultado=mysqli_query($conexao,$query);
    return mysqli_fetch_assoc($resultado);
}