<?php
class Orcamento{
    var $idOrcamento;
    var $dataOrcamento;
    var $situacao;
    var $cliente;
    var $funcionarioM;
    var $funcionarioV;

    function Orcamento ($idOrcamento, $dataOrcamento, $situacao, $cliente, $funcionarioM, $funcionarioV){
        $var->idOrcamento = $idOrcamento;
        $var->dataOrcamento = $dataOrcamento;
        $var->situacao = $situacao;
        $var->cliente = $cliente;
        $var->funcionarioM = $funcionarioM;
        $var->funcionarioV = $funcionarioV;
    }

    function get_idOrcamento(){
        return $idOrcamento;
    }
    function get_dataOrcamento(){
        return $dataOrcamento;
    }
    function get_situacao(){
        return $situacao;
    }
    function get_cliente(){
        return $cliente;
    }
    function get_funcionarioM(){
        return $funcionarioM;
    }
    function get_funcionarioV(){
        return $funcionarioV;
    }


    
}

?>