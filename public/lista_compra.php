<?php
include "cabecalho.php";
?>
<h1>Lista de Compras</h1>
<?php
include "menu.php";
include "conteudo.php";
include "../_sys/consulta_compra.php";

   if (isset($_COOKIE['pessoaacesso'])) {
      $IDPessoa = $_COOKIE['pessoaacesso'];
}

$compras = mostraCompra($conexao,$IDPessoa);

?>
	<table class="table table-striped table-bordered">
		<tr style="text-align: center">
	        <td>Numero Compra</td>
	        <td>Cliente</td>
	        <td>Produto</td>
	        <td>Quantidade</td>
	    </tr>

<?php

foreach($compras as $compra):
?>
	    <tr style="text-align: center">
	        <td><?=$compra['IDCompra']?></td>
	        <td><?=$compra['Nome_compra']?></td>
	        <td><?=$compra['IDProduto']?></td>
	        <td><?=$compra['quantidade_compra']?></td>
	    </tr>
<?php

endforeach;
?>
</table>