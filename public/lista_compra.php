<?php
include "cabecalho.php";
?>
<h1>Lista de Compras</h1>
<?php
include "menu.php";
include "conteudo.php";
require_once "../consultas/consulta_compra.php";

   if (isset($_COOKIE['pessoaacesso'])) {
      $IDPessoa = $_COOKIE['pessoaacesso'];
}

$compras = mostraCompra($conexao,$IDPessoa);

?>
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

foreach($compras as $compra):


?>
	    <tr style="text-align: center">
	        <td><?=$compra['IDCompra']?></td>
	        <td id="nomepessoa"><?=$compra['Nome_compra']?></td>
	        <td><?=$compra['produto_compra']?></td>
	        <td><?=$compra['quantidade_compra']?></td>
            <td><?=$compra['valor_compra']?></td>
            <td><?=$compra['data_compra'];?></td>
	    </tr>
<?php

endforeach;
?>
</table>
<script src="../js/newJS/lista_compra.js">
</script>