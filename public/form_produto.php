<?php include "cabecalho.php";?>
<h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php include "menu.php";?>
<?php include "conteudo.php";?>
<form action="../_sys/adiciona-produto.php" method="post">
	<table class="table">
        <tr>
            <td><label for="produto">Produto</label></td>
        </tr>
        <tr>
            <td><input type="text" name="nome_produto"></td>
        </tr>
        <tr>
            <td><label for="preco">preco</label></td>
        </tr>
        <tr>
            <td><input type="text" name="preco_produto"></td>
        </tr>
        <tr>
            <td><label for="quantidade">Quantidade</label></td>
        </tr>
        <tr>
            <td><input type="text" name="quantidade_produto"></td>
        </tr>
        <tr>
            <td><button>Cadastrar</button></td>
        </tr>
	</table>
</form>
<?php include "rodape.php";