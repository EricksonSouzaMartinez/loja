<?php include "cabecalho.php";
include "../_sys/consulta_categoria.php";

$categorias= listaCategoria($conexao);
?>
<h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php include "menu.php";?>
<?php include "conteudo.php";?>
<form action="../_sys/adiciona-produto.php" method="post">
	<table class="table">
        <tr>
            <td><label for="produto">Produto:</label>
                <input class="form-control" type="text" name="nome_produto"></td>
        </tr>

        <tr>
            <td><label for="preco">Preco:</label>
                <input class="form-control" type="text" name="preco_produto"></td>
        </tr>

        <tr>
            <td><label for="quantidade">Quantidade:</label>
                <input class="form-control" type="text" name="quantidade_produto"></td>
        </tr>

        <tr>
            <td><label for="quantidade">Categorias:</label>
                <?php foreach ($categorias as $categoria): ?>
                       <input type="radio" name="categoria_id" value="<?=$categoria['id']?>">
                       <?=$categoria['Nome_categoria']?>
                <?php endforeach;?>
            </td>
        </tr>
        <tr>
            <td><button CLASS="btn">Cadastrar</button></td>
        </tr>
	</table>
</form>
<?php include "rodape.php";