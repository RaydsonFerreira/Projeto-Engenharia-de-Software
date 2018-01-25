<?php

    include_once("../persistence/conexao.php");
    include_once("../model/peca.php");
    include_once("..//persistence/pecaDao.php");

    $id = $_GET["id"];
    $Descricao = $_GET["Descricao"];
    $preco = $_GET["preco"];
    $quantEstoque = $_GET["quantEstoque"];

    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getLink();

    $p = new Peca($id, $Descricao, $preco, $quantEstoque);

    $pecadao = new PecaDao();
    $retorno = $pecadao->alterar($p, $link);
?>