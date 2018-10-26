<?php
include "../_sys/consulta_pessoa.php";
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$acesso=$_POST['acesso'];

if (inserePessoa($conexao,$nome,$telefone,$acesso)){
    header("Location:../public/lista_pessoas.php?cadastro=1");
    die();
}

