<?php require_once "cabecalho.php";?>
<h1>Lista de Compras</h1>
<?php require_once "menu.php";
require_once "conteudo.php";
require_once "../consultas/consulta_compra.php";
require_once "../classes/Compra.php";?>

	<table class="table table-striped table-bordered">
		<tr style="text-align: center">
	        <td>NUMERO VENDA</td>
	        <td>CLIENTE</td>
	        <td>PRODUTO</td>
	        <td>QUANTIDADE</td>
            <td>VALOR</td>
            <td>DATA COMPRA</td>
	    </tr>
<?php
$compras = mostraCompra($conexao,$IDPessoa,$PessoaAcesso);
foreach($compras as $compra):
?>
	    <tr style="text-align: center">
	        <td><?=$compra->id?></td>
	        <td id="nomepessoa"><?=$compra->pessoa_id?></td>
	        <td><?=$compra->produto_id?></td>
	        <td><?=$compra->quantidade?></td>
            <td><?=$compra->valor?></td>
            <td><?=$compra->data;?></td>
	    </tr>
<?php
endforeach;
?>
</table>
<script src="../js/newJS/lista_compra.js">
</script>