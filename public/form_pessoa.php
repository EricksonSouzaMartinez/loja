<?php include "cabecalho.php";?>
<h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php include "menu.php";
include "conteudo.php";
include "../_sys/logica_usuario.php";
verificaUsuario();
?>
<form action="../_sys/adiciona_pessoa.php" class="form" method="post">

	<table class="table">
        <tr>
		    <td><label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome"></td>
        </tr>
        <tr>
            <td><label for="telefone">Telefone:</label>
                <input class="form-control" type="text" name="telefone" maxlength="11"></tr>
        </tr>
        <tr>
            <td>Cliente:
            <input type="radio" name="acesso" value="1">
                Funcionario:
			<input type="radio" name="acesso" value="2"></td>
        </tr>
        <tr>
            <td><button class="btn">Cadastrar</button></td>

        </tr>
    </table>
</form>
<?php include "rodape.php";