<?php

    include_once("../persistence/conexao.php");
    include_once("../model/funcionario.php");
    include_once("..//persistence/funcionarioDao.php");

    $username = $_GET["nome"];
    $senha = $_GET["senha"];
    $cargo = $_GET["cargofuncionario"];

    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getLink();

    $f = new Funcionario($username, '', '', $cargo, '', $senha);

    $funcionariodao = new FuncionarioDao();
    $retorno = $funcionariodao->Logar($f, $link);
    
    if($retorno && $cargo == "M"){
        header("Location:../view/menuMecanico.php");
    }
    else if($retorno && $cargo == "E"){
        header("Location:../view/menuEstoque.php");
    }
    else if($retorno && $cargo == "V"){
        header("Location:../view/menuVendas.php");
    }
    $conexao->fechar();
?>