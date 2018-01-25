<?php
class Peca{
    var $nSerie;
    var $descicaoPeca;
    var $precoPeca;
    var $quantEstoque;

    function Peca($nSerie, $descicaoPeca, $precoPeca, $quantEstoque){
        $this->nSerie = $nSerie;
        $this->descicaoPeca = $descicaoPeca;
        $this->precoPeca = $precoPeca;
        $this->quantEstoque = $quantEstoque;
    }

    function getnSerie(){
        return $this->nSerie;
    }
    function getdescicaoPeca(){
        return $this->descicaoPeca;
    }
    function getprecoPeca(){
        return $this->precoPeca;
    }
    function getquantEstoque(){
        return $this->quantEstoque;
    }
}
?>