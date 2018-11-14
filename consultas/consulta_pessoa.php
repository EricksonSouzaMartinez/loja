<?php
include "../conexao/conecta.php";

function inserePessoa($conexao,$nome,$telefone,$acesso)
{
    $query = "insert into Pessoas (Nome,Telefone,Acesso) values('{$nome}','{$telefone}','{$acesso}')";

    return mysqli_query($conexao, $query);
}

function mostraPessoa($conexao){
    $pessoas=array();
    $resultado=mysqli_query($conexao,"select * from Pessoas WHERE ps_ativo = 1");
    while ($pessoa = mysqli_fetch_assoc($resultado)){
        array_push($pessoas,$pessoa);
    }
    return $pessoas;
}

function inativarPessoa($conexao,$id,$ativo){
    $query="update pessoas set ps_ativo = {$ativo} where IDPessoa = {$id}";
    return mysqli_query($conexao,$query);
}

function editaPessoa($conexao,$id,$nome,$telefone,$acesso)
{
    $query = "update pessoas set Nome ='{$nome}',Telefone='{$telefone}',Acesso='{$acesso}' where IDPessoa ={$id}";
    return mysqli_query($conexao, $query);
}

function buscaID($conexao,$nome,$telefone){
    $nome = mysqli_real_escape_string($conexao, $nome);
    $telefone = mysqli_real_escape_string($conexao, $telefone);

    $query="SELECT IDPessoa FROM pessoas WHERE Nome = '{$nome}' AND Telefone = {$telefone}";
    $resultado = mysqli_query($conexao,$query);
    var_dump($resultado);
    return mysqli_fetch_assoc($resultado);
}

function buscaPessoa($conexao,$id){
    $query="select * from pessoas where IDPessoa = {$id}";
    $resultado = mysqli_query($conexao,$query);
    return mysqli_fetch_assoc($resultado);
}

function loginPessoa($conexao,$nome,$telefone){
    $query="SELECT * FROM pessoas WHERE Nome='{$nome}' AND Telefone='{$telefone}'";
    $resul=mysqli_query($conexao,$query);
    $pessoa=mysqli_fetch_assoc($resul);
    return $pessoa;
}