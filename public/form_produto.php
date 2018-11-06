<?php include "cabecalho.php";
include "../_sys/consulta_categoria.php";
$usado = "";
$produto =array(
        "Nome_Produto" => "",
        "Preco_Produto" => "",
        "Quantidade_Produto" => "",
        "categoria_id" => "1");
$categorias= listaCategoria($conexao);
?>
<h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php include "menu.php";?>
<?php include "conteudo.php";
include "../_sys/logica_usuario.php";
verificaUsuario();?>
<form action="../_sys/adiciona-produto.php?action="cadastro" class="form" method="post">
<?php include ("Form_base.php");?>
        <tr>
            <td><button CLASS="btn">Cadastrar</button></td>
        </tr>
	</table>
    <a href="form_categoria.php">Nova Categoria</a>
</form>
<?php include "rodape.php";