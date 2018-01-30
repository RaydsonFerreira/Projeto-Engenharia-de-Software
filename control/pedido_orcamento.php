<?php
    echo $_GET['codigo'];

    date_default_timezone_set('America/Sao_Paulo');
    include_once("../persistence/conexao.php");
    include_once("../model/orcamento.php");
    include_once("..//persistence/orcamentoDao.php");

    $username = $_GET['codigo'];
    $descricao = $_GET['pedidoOrcamento'];

    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getlink();

    $orcamentodao = new OrcamentoDao();
    $id = $orcamentodao->resgatarID($link);

    $o = new Orcamento($id, date('Y-m-d'), 'E', $username, '', '');

    $retorno = $orcamentodao->Cadastrar($o, $link);

?>