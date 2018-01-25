<?php

    include_once("../persistence/conexao.php");
    include_once("../model/peca.php");
    include_once("..//persistence/pecaDao.php");

    $id = $_GET["id"];

    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getLink();

    $p = new Peca($id, '', '', '');

    $pecadao = new PecaDao();
    $retorno = $pecadao->Excluir($p, $link);