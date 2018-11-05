<?php include "cabecalho.php";
include "../_sys/consulta_categoria.php";
include "../_sys/consulta_produto.php";

$categorias= listaCategoria($conexao);
$id=$_POST['id'];
$produto=buscaProduto($conexao,$id);
?>
    <h1 class="adiciona-pessoa">Alterar Produto</h1>
<?php include "menu.php";?>
<?php include "conteudo.php";
include "../_sys/logica_usuario.php";
verificaUsuario();?>
    <form action="../_sys/edita_produto.php" class="form" method="post">
        <table class="table">
            <input name="id" type="hidden" value="<?=$produto['IDProduto']?>">
            <tr>
                <td><label for="produto">Produto:</label>
                    <input class="form-control" type="text" name="nome_produto" value="<?=$produto['Nome_Produto']?>"></td>
            </tr>

            <tr>
                <td><label for="preco">Preco:</label>
                    <input class="form-control" type="text" name="preco_produto" value="<?=$produto['Preco_Produto']?>"></td>
            </tr>

            <tr>
                <td><label for="quantidade">Quantidade:</label>
                    <input class="form-control" type="text" name="quantidade_produto" value="<?=$produto['Quantidade_Produto']?>"></td>
            </tr>
            <tr>
                <td><label for="usado">Usado:</label>
                    <input type="checkbox" name="usado" <?=$produto['usado'] ? "checked='checked'" : "";?>value="true"></td>
            </tr>
            <tr>
                <td><label for="quantidade">Categorias:</label>
                    <select name="categoria_id" class="form-control">
                        <?php foreach ($categorias as $categoria):
                        $essaEhcategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao=$essaEhcategoria ? "selected='selected'": "";
                        ?>
                        <option  value="<?=$categoria['id']?>" <?=$selecao?>>
                            <?=$categoria['Nome_categoria']?>
                            <?php endforeach;?>
                        </option>>
                    </select>
                </td>
            </tr>
            <tr>
                <td><button CLASS="btn">Alterar</button></td>
            </tr>
        </table>
    </form>
<?php include "rodape.php";