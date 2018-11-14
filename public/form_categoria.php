<?php
include "cabecalho.php";
?>
    <h1 class="adiciona-pessoa">Cadastrar Categoria</h1>
<?php include "menu.php";
include "conteudo.php";
?>
<form action="../_sys/adiciona_categoria.php" method="post">
	<table class="table">
		<tr>
			<td>Categoria
				<input class="form-control" type="text" name="categoria" maxlength="25"
				required placeholder="Digite a categoria" pattern="[A-Za-z']{3,}">
			</td>
		</tr>
		<tr>
			<td>
				<button class="btn btn-primary">Cadastrar</button>
			</td>
		</tr>
	</table>