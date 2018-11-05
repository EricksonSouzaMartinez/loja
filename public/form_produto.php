<?php include "cabecalho.php";
include "../_sys/consulta_categoria.php";

$categorias= listaCategoria($conexao);
?>
<h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php include "menu.php";?>
<?php include "conteudo.php";
include "../_sys/logica_usuario.php";
verificaUsuario();?>
<form action="../_sys/adiciona-produto.php" class="form" method="post">
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
            <td><label for="usado">Usado:</label>
                <input type="checkbox" name="Usado" value="true"></td>
        </tr>
        <tr>
            <td><label for="quantidade">Categorias:</label>
                <select name="categoria_id" class="form-control">
                <?php foreach ($categorias as $categoria): ?>
                       <option  value="<?=$categoria['id']?>">
                       <?=$categoria['Nome_categoria']?>
                <?php endforeach;?>
                       </option>>
                </select>
            </td>
        </tr>
        <tr>
            <td><button CLASS="btn">Cadastrar</button></td>
        </tr>
	</table>
    <a href="form_categoria.php">Nova Categoria</a>
</form>
<?php include "rodape.php";