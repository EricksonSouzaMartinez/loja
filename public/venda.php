<?php require_once "cabecalho.php";
require_once "../consultas/consulta_categoria.php";
require_once "../consultas/consulta_produto.php";
require_once "../consultas/consulta_pessoa.php";

$produto =new Produto();
$quantidade=$_POST['nameContador'];
$categorias= listaCategoria($conexao);

$produto->id=$_POST['id'];
$produto=buscaProduto($conexao,$produto);
$usado = ($produto->usado) ? "checked='checked'" : "";

$pessoas = mostraPessoa($conexao,$IDPessoa,$PessoaAcesso);

?>
    <h1 class="adiciona-pessoa">Comprar</h1>
<?php require_once "menu.php";
require_once "conteudo.php";
require_once "../_sys/logica_usuario.php";
verificaUsuario();?>
    <form action="../_sys/escolher_produto.php" class="form" method="post">
        <link rel="stylesheet" type="text/css" href="../css/venda.css">
        <input name="IDProduto" type="hidden" value="<?=$produto->id?>">
          <?php require_once("form_base_produto.php");?>
        <tr>
            <td><label for="pessoa">Pessoa:</label>
                <select name="IDPessoa" class="form-control">
                    <?php foreach ($pessoas as $pessoa):
                    $essaEhpessoa = $compra['Pessoa_nome'] == $pessoas['IDPessoa'];
                    $selecao=$essaEhcategoria ? "selected='selected'": "";
                    ?>
                    <option  value="<?=$pessoa['IDPessoa']?>" <?=$selecao?>>
                        <?=$pessoa['Nome']?>
                        <?php endforeach;?>
                    </option>>
                </select>
            </td>
        <tr>
            <td>Quantidade:<input class="form-control quantidade" type="text" name="nameContador" value="<?=$quantidade?>"></td>
            </td>
        </tr>
        <tr>
            <td class="valor">Valor:</td>
            </td>
        </tr>
        <tr>
            <td><button CLASS="btn btn-primary">Comprar</button></td>
        </tr>
        </table>
    </form>

<script src="../js/newJS/venda.js"></script>
<?php require_once "rodape.php";
