<?php
require_once "../consultas/consulta_pessoa.php";
require_once "../_sys/logica_usuario.php";
verificaUsuario();
if(isset($_POST['idAtiva'])){
    $id=$_POST['idAtiva'];
    $ativo=1;
} if(isset($_POST['idInativa'])) {
    $id = $_POST['idInativa'];
    $ativo=1;
}

if (inativarPessoa($conexao,$id,$ativo)){
    $_SESSION['sucess']="Usuario inativo com sucesso";
    ///header("Location:../public/lista_pessoas.php");
    die();
}else{
    $_SESSION['danger']="Usuario não inativo";
   // header("Location:../public/lista_pessoas.php");
    ?>
    <p class="alert-danger" >
    <?php
    die();
}