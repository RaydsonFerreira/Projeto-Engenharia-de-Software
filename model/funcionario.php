<?php

class Funcionario{
    var $usernameFunc;
    var $nomeFunc;
    var $comissaoFunc;
    var $cargoFunc;
    var $ndependentesFunc;
    var $senhaFunc;

    function Funcionario($usernameFunc, $nomeFunc, $comissaoFunc, $cargoFunc, $ndependentesFunc, $senhaFunc){
        $this->usernameFunc = $usernameFunc;
        $this->nomeFunc = $nomeFunc;
        $this->comissaoFunc = $comissaoFunc;
        $this->cargoFunc = $cargoFunc;
        $this->ndependentesFunc = $ndependentesFunc;
        $this->senhaFunc = $senhaFunc;
    }

    function getUsernameFunc(){
        return $this->usernameFunc;
    }
    function getNomeFunc(){
        return $this->nomeFunc;
    }
    function getComissaoFunc(){
        return $this->comissaoFunc;
    }
    function getCargoFunc(){
        return $this->cargoFunc;
    }
    function getNdependentesFunc(){
        return $this->ndependentesFunc;
    }
    function getSenhaFunc(){
        return $this->senhaFunc;
    }
}
?>