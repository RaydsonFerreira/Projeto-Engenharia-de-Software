<?php

header('Content-Type: text/html; charset=iso-8859-1');
include_once("../model/orcamento.php");

class OrcamentoDAO{
    function cadastrar($cliente, $orcamento, $link){
        $SQL = "INSERT INTO 'Orçamento' VALUES (".$orcamento->get_idOrcamento.",'".$orcamento->get_dataOrcamento."','".$orcamento->get_situacao."','".$cliente."','','');";
       
        echo $SQL;

        if(!mysqli_query($link,$SQL)){
			die("ERRO AO CADASTRAR ORÇAMENTO!");
		}
		
		return true;
    }

    function resgatarID($link){
        $SQL = "SELECT Orçameto.idOrçamento from Orçamento;";

        $retorno = mysqli_query($link, $SQL);

        $id = 1;


        while($rs = mysql_fetch_array($retorno)){
            if($rs['idOrçamento'] === $id){
                $id=$id+1;
            }
        }

        return $id;
    }

    function buscar($orcamento, $link){
        if($orcamento->get_idOrcamento() != ''){
            $SQL = "SELECT * FROM Orcamento WHERE idOrcamento = '".$orcamento->get_idOrcamento()."';";
        }
        else{
            $SQL = "SELECT * FROM Orcamento;";
        }
        
        $retorno = mysqli_query($link,$SQL);
        if(!$retorno){
            die("ERRO NA CONSULTA");
        }
        return $retorno;
    }
}
?>