<?php

    include_once("../persistence/conexao.php");
    include_once("../model/cliente.php");
    include_once("..//persistence/clienteDao.php");

    $username = $_GET['nome'];
    $senha = $_GET['senha'];
    
    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getlink();

    $c = new Cliente($username, $senha,'','','','','','','','');

    $clientedao = new ClienteDao();
    $retorno = $clientedao->Logar($c, $link);

    if($retorno){
        header("Location:../view/pedirOrcamento.php");
    }
    else{
        header("Location:../view/loginCliente.php");
    }

    $conexao->fechar();
?>