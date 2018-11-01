<?php include "cabecalho.php";?>
    <h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php include "menu.php";?>
<?php include "conteudo.php";
include "../_sys/consulta_pessoa.php";

$id=$_POST['id'];
$pessoa=buscaProduto($conexao,$id);
?>
    <form action="../_sys/dita_pessoa.php" method="post">


        <table class="table">
            <input type="hidden" name="id" value="<?=$pessoa['IDPessoa']?>">
            <tr>
                <td><label for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" value="<?=$pessoa['Nome']?>"></td>
            </tr>

            <tr>
                <td><label for="telefone">Telefone:</label>
                    <input class="form-control" type="text" name="telefone" maxlength="11" value="<?=$pessoa['Telefone']?>"></tr>
            </tr>

            <tr>
                <td>Cliente:
                    <input type="radio" name="acesso" value="1">
                    Funcionario:
                    <input type="radio" name="acesso" value="2"></td>
            </tr>

            <tr>
                <td><button class="btn">Alterar</button></td>

            </tr>
        </table>
    </form>
<?php include "rodape.php";