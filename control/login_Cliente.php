<?php

    include_once("../persistence/conexao.php");
    include_once("../model/cliente.php");
    include_once("..//persistence/clienteDao.php");

    $username = $_GET['nome'];
    $senha = $_GET['senha'];
    $stringg = $_GET['string'];
    
    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getlink();

    $c = new Cliente($username, $senha,'','','','','','','','');

    $clientedao = new ClienteDao();
    $retorno = $clientedao->Logar($c, $link);
    
    if($retorno){
        header("Location:../view/pedirOrcamento.php?username=$username");
    }
    else{
        header("Location:../view/loginCliente.php");
    }

    $conexao->fechar();
?>