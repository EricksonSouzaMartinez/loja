<?php
include "cabecalho.php";
require_once "../consultas/consulta_produto.php";
include "../_sys/logica_usuario.php";
include "../_sys/mostra_alerta.php";
?>
<h1 class="adiciona-pessoa">Produtos Cadastrados</h1>
<link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
<?php 
include "menu.php";
include "conteudo.php";

verificaUsuario();
mostraAlerta("success");
mostraAlerta("danger");
?>
    <table class="table table-striped table-bordered">
    <tr style="text-align: center;">
        <td>NOME</td>
        <td>PRECO</td>
        <td>QUANTIDADE</td>
        <td>CATEGORIA</td>
        <td>ESTADO</td>
        <td>APAGAR</td>
        <td>ALTERAR</td>
    </tr>



<?php
$produtos= mostraProdutos($conexao);
foreach($produtos as $produto):
    ?>
    <tr style="text-align: center">
        <td><?=$produto['Nome_Produto']?></td>
        <td><?=$produto['Preco_Produto']?></td>
        <td><?=$produto['Quantidade_Produto']?></td>
        <td><?=$produto['categoria_nome'];?></td>
        <td><?=($produto['usado']==1)?"Usado":"Novo";?></td>
        <td>
            <form action="../_sys/remove_produto.php" method="post">
                <input name="id" hidden value="<?=$produto['IDProduto']?>">
                <button class="btn btn-danger">Inativa</button>
            </form>
        </td>
        <td>
            <form action="../public/form_edita_produto.php" method="post">
                <input name="id" hidden value="<?=$produto['IDProduto']?>">
                <button class="btn btn-primary">Editar</button>
            </form>
        </td>

    </tr>
<?php
endforeach;
?>
    </table>
<?
include "rodape.php";