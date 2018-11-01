<?php
include "cabecalho.php";
include "../_sys/consulta_produto.php";?>
<h1 class="adiciona-pessoa">Lista de Produtos</h1>
<?php include "menu.php";
include "conteudo.php";

if(array_key_exists("removido",$_GET) && $_GET["removido"]==1){
    ?>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <p class="alert-success"> A Produto foi Excluido</p>
    <?php
}
if(array_key_exists("cadastro",$_GET) && $_GET["cadastro"]==1){
    ?>
    <p class="alert-success"> A Produto foi cadastrado</p>
    <?php
}
?>
    <table class="table table-striped table-bordered">
<?php
$produtos= mostraProdutos($conexao);
foreach($produtos as $produto):
    ?>
    <tr style="text-align: center">
        <td><?=$produto['Nome_Produto']?></td>
        <td><?=$produto['Preco_Produto']?></td>
        <td><?=$produto['Quantidade_Produto']?></td>
        <td><?=$produto['categoria_nome'];?></td>
        <td><?=($produto['usado']==1)?"sim":"Nao";?></td>
        <td>
            <form action="../_sys/remove_produto.php" method="post">
                <input name="id" hidden value="<?=$produto['IDProduto']?>">
                <button class="btn-danger">Remover</button>
            </form>
        </td>
        <td>
            <form action="../public/form_edita_produto.php" method="post">
                <input name="id" hidden value="<?=$produto['IDProduto']?>">
                <button class="btn-dark">Editar</button>
            </form>
        </td>

    </tr>
<?php
endforeach;
?>
    </table>
<?
include "rodape.php";