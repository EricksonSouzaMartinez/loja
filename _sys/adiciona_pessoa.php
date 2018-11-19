<?php
require_once "../consultas/consulta_pessoa.php";
require_once "../_sys/logica_usuario.php";

verificaUsuario();

$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$acesso=$_POST['acesso'];

if (inserePessoa($conexao,$nome,$telefone,$acesso)){
    $_SESSION['suxesso']="Pessoa Cadastrada com sucesso";
    header("Location:../public/lista_pessoas.php");
    die();
}else{
    $_SESSION['danger']="Pessoa não cadastrada";
    header("Location:../public/lista_pessoas.php");
}

