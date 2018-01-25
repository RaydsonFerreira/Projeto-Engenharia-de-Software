<?php

    include_once("../persistence/conexao.php");
    include_once("../model/peca.php");
    include_once("..//persistence/pecaDao.php");
    
    $nome = $_GET["Nome"];

    $conexao = new Connection('localhost', 'root', '', 'Oficina');
    $link = $conexao->getLink();

    $p = new Peca('', $nome, '', '');

    $pecadao = new PecaDao();
    $retorno = $pecadao->Buscar($p, $link);
    if($retorno){
        echo "Numero de Serie - Descricao - Preco pessa - Quantidade <br>";
    }
    
    while($rs = $retorno->fetch_array()){
        echo $rs["nSerie"]." - ";
        echo $rs["descricaoPeca"]." - ";
        echo $rs["precoPeca"]." - ";
        echo $rs["quantEstoque"]."<br>";
    }

    echo "<br>";

    if($retorno){
        echo'
        <form action="excluir_peca.php" method="GET">
            <input type="text" placeholder= "Digite o Id da peca" name="id">
            <button type="submit"> Excluir </button>
        </form>
        <form action="alterar_peca.php" method="GET">
            <input type="number" placeholder= "Digite o Id da peca" name="id">
            <input type="text" placeholder="descricao da Peca" name="Descricao">
            <input type="number" placeholder="preco das Pecas" name="preco">
            <input type="number" placeholder="Quantidade de peças" name="quantEstoque">
            <button type="submit"> Alterar </button>
        </form>
        ';
    }

    $conexao->fechar();
?>