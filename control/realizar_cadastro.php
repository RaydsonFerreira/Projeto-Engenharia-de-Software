<?php

    include_once("../persistence/conexao.php");
    include_once("../model/cliente.php");
    include_once("..//persistence/clienteDao.php");

    $username = $_GET['username'];
    $senha = $_GET['senha'];
    $nome = $_GET['nome'];
    $rua = $_GET['rua'];
    $nEndereco = $_GET['nEndereco'];
    $complemento = $_GET['complemento'];
    $bairro = $_GET['bairro'];
    $cep = $_GET['cep'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];
    
    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getlink();

    $c = new Cliente($username, $senha, $nome,$rua,$nEndereco,$complemento,$bairro,$cep,$cidade,$estado);

    $clientedao = new ClienteDao();
    $retorno = $clientedao->Cadastrar($c, $link);

    if(!$retorno){
        echo "ERRO";
    }
    else echo "cadastro realizado";
    

    $conexao->fechar();
?>