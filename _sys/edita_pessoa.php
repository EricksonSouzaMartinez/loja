<?php
require_once "../consultas/consulta_pessoa.php";
include "../_sys/logica_usuario.php";
verificaUsuario();
$id=$_POST['id'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$acesso=$_POST['acesso'];

if (editaPessoa($conexao,$id,$nome,$telefone,$acesso)){
header("Location:../public/lista_pessoas.php?cadastro=1");
die();
}