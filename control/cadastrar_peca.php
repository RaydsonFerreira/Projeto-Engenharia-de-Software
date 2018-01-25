<?php

    include_once("../persistence/conexao.php");
    include_once("../model/peca.php");
    include_once("..//persistence/pecaDao.php");
    
    $codigo = $_GET["codigo"];
    $descricao = $_GET["descricao"];
    $nome = $_GET["preco"];
    $quantidade = $_GET["quantidade"];


    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getLink();

    $p = new Peca($codigo, $descricao, $nome, $quantidade);

    $pecadao = new PecaDao();
    $retorno = $pecadao->Cadastrar($p, $link);
    if(!$retorno){
        echo "ERROR";
    }
    else echo "Cadastrado com sucesso!";

    $conexao->fechar();
?>