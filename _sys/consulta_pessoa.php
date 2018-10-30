<?php
include "../conexao/conecta.php";
function inserePessoa($conexao,$nome,$telefone,$acesso)
{
    $query = "insert into Pessoas (Nome,Telefone,Acesso) values('{$nome}','{$telefone}','{$acesso}')";

    return mysqli_query($conexao, $query);
}
function mostraPessoa($conexao){
    $pessoas=array();
    $resultado=mysqli_query($conexao,"select * from Pessoas");
    while ($pessoa = mysqli_fetch_assoc($resultado)){
        array_push($pessoas,$pessoa);
    }
    return $pessoas;
}

function deletePessoa($conexao,$id){
    $query="delete from Pessoas where IDPessoa = {$id}";
    return mysqli_query($conexao,$query);
}
