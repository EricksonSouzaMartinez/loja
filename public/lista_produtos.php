<?php
include "cabecalho.php";
include "../_sys/consulta_produto.php";?>
<h1 class="adiciona-pessoa">Lista de Produtos</h1>
<?php include "menu.php";
include "conteudo.php";

if(isset($_GET['removido']) && $_GET['removido']==1){
    ?>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <p class="alert-success"> A Produto foi Excluido</p>
    <?php


}else {
    ?>
    <p class="alert-danger"> A Produto nao foi Excluido</p>
    <?php
}
if(isset($_GET['cadastro']) && $_GET['cadastro']==1){
    ?>
    <p class="alert-success"> A Produto foi cadastrado</p>
    <?php
}else {
    ?>
    <p class="alert-danger"> A Produto nao foi cadastrado</p>
    <table class="table table-striped table-bordered">
    <?php
}

$produtos= mostraProdutos($conexao);
foreach($produtos as $produto):
    ?>
    <tr>
        <td><?=$produto['Nome_Produto']?></td>
        <td><?=$produto['Preco_Produto']?></td>
        <td><?=$produto['Quantidade_Produto']?></td>
        <td >
            <a class="text-danger" href="../_sys/remove_produto.php?id=<?=$produto['IDProduto']?>">Remover</a>
        </td>

    </tr>
<?php
endforeach;
?>
    </table>
<?
include "rodape.php";