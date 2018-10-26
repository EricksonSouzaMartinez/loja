<?php
include "cabecalho.php";
include "menu.php";

if(isset($_GET['cadastro']) && $_GET['cadastro']==1){
    ?>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <p class="alert-success"> A Produto foi cadastrado</p>
    <?php


}else {
    ?>
    <p class="alert-danger"> A Produto nao foi cadastrado</p>

    <?php
}

include "rodape.php";