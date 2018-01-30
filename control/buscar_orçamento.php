<?php

    include_once("../persistence/conexao.php");
    include_once("../model/orcamento.php");
    include_once("..//persistence/orcamentoDao.php");
    
    $numero = $_GET["numero"];

    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getLink();

    $o = new Orcamento($numero, '', '', '', '', '');

    $orcamentodao = new OrcamentoDao();
    $retorno = $orcamentodao->Buscar($o, $link);
    if($retorno){
        echo "ID Orçamento - Data - Situação - Cliente - Mecânico - Vendedor <br>";
    }
    
    while($rs = $retorno->fetch_array()){
        echo $rs["idOrcamento"]." - ";
        echo $rs["dataOrcamento"]." - ";
        echo $rs["situacaoOrcamento"]." - ";
        echo $rs["Cliente_usernameCliente"]." - ";
        echo $rs["Funcionario_usernameMec"]." - ";
        echo $rs["Funcionario_usernameVen"]."<br>";
    }

    echo "<br>";

    $conexao->fechar();
?>