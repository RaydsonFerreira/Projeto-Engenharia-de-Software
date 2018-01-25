<?php

include_once("../model/peca.php");

Class PecaDAO{
    function Buscar($peca, $link){
        if($peca->getdescicaoPeca()!= ''){
            $SQL = "SELECT * FROM Peca WHERE descricaoPeca = '".$peca->getdescicaoPeca()."';";
        }
        else{
            $SQL = "SELECT * FROM Peca;";
        }
        
        $retorno = mysqli_query($link,$SQL);
        if(!$retorno){
            die("ERRO NA CONSULTA");
        }
        return $retorno;
    }

    function excluir($peca, $link){
        $SQL = "DELETE FROM Peca WHERE nserie = '".$peca->getnSerie()."';";
		
		if(!mysqli_query($link,$SQL)){
			die("ERRO NA EXCLUSÃO");
        }
    }

    function alterar($peca, $link){
        $SQL = "UPDATE Peca SET descricaoPeca ='".$peca->getdescicaoPeca()
        ."', precoPeca =".$peca->getprecoPeca().",quantEstoque =".$peca->getquantEstoque()." 
        WHERE nSerie = ".$peca->getnSerie().";";
        echo $SQL;

        if(!mysqli_query($link,$SQL)){
			die("ERRO NA ALTERAÇÃO");
        }
    } 

    function Cadastrar($peca, $link){
        $SQL = "INSERT INTO Peca VALUES (".$peca->getnSerie().",'".$peca->getdescicaoPeca()."',".$peca->getprecoPeca().",".$peca->getquantEstoque().");";
        
        if(!mysqli_query($link,$SQL)){
			die("ERRO NO CADASTRO!");
        }
        return true;
    }
}