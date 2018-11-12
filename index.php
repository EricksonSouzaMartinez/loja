<?php
include "public/cabecalho.php";
include "_sys/logica_usuario.php";
include "_sys/mostra_alerta.php";
?>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
		<h1 class="principal">Nossa Loja</h1>
	</div>
<?php
if(usuarioEstalogado()){
mostraAlerta("danger");
}else{

?>
<h2>Login</h2>
<form action="public/login.php" class="form_login" method="post">
	<table class="table">
		<tr>
			<td>Nome:<input id="nome" class="form-control" type="text" name="nome_pessoa"></td>
		</tr>
		<tr>
			<td>Telefone:<input id="telefone" class="form-control" type="text" name="telefone_pessoa" maxlength="11"></td>
		</tr>
		<tr><td>
			<button class="btn btn-primary">Logar</button></td>
		</tr>
	</table>
</form>
<?php 
}