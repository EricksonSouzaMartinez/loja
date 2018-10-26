<?php
include "../conexao/conecta.php";
function inserePessoa($conexao,$nome,$telefone,$acesso)
{
    $query = "insert into Pessoas (Nome,Telefone,Acesso) values('{$nome}','{$telefone}','{$acesso}')";

    return mysqli_query($conexao, $query);
}
