<?php

    header('Content-Type: text/html; charset=iso-8859-1');
    include_once("../persistence/conexao.php");
    include_once("../model/cliente.php");
    include_once("..//persistence/clienteDao.php");
    
    $nome = $_GET["nome"];

    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getLink();

    $c = new Cliente('','',$nome,'','','','','','','');

    $clientedao = new ClienteDao();
    $retorno = $clientedao->Consultar($c, $link);
    
    while($rs = $retorno->fetch_array()){
        echo utf8_encode($rs["nomeCliente"]." - ");
        echo utf8_encode($rs["cidadeCliente"]." - ");
        echo utf8_encode($rs["estadoCliente"]."<br>");
    }

    echo "<br>";

    $conexao->fechar();
?>