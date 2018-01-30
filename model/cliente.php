<?php
class Cliente{
    var $usernameCliente;
    var $senhaCliente;
    var $nomeCliente;
    var $ruaCliente;
    var $nEndCliente;
    var $complementoCliente;
    var $bairroCliente;
    var $cepCliente;
    var $cidadeCliente;
    var $estadoCliente;

    function Cliente($usernameCliente, $senhaCliente, $nomeCliente, $ruaCliente, $nEndCliente, $complementoCliente, $bairroCliente, $cepCliente, $cidadeCliente, $estadoCliente){
        $this->usernameCliente = $usernameCliente;
        $this->senhaCliente = $senhaCliente;
        $this->nomeCliente = $nomeCliente;
        $this->ruaCliente = $ruaCliente;
        $this->nEndCliente = $nEndCliente;
        $this->complementoCliente = $complementoCliente;
        $this->bairroCliente = $bairroCliente;
        $this->cepCliente = $cepCliente;
        $this->cidadeCliente = $cidadeCliente;
        $this->estadoCliente = $estadoCliente;
    }
    function getusernameCliente(){
        return $this->usernameCliente;
    }
    function getsenhaCliente(){
        return $this->senhaCliente;
    }
    function getnomeCliente(){
        return $this->nomeCliente;
    }
    function getruaCliente(){
        return $this->ruaCliente;
    }
    function getnEndCliente(){
        return $this->nEndCliente;
    }
    function getcomplementoCliente(){
        return $this->complementoCliente;
    }
    function getbairroCliente(){
        return $this->bairroCliente;
    }
    function getcepCliente(){
        return $this->cepCliente;
    }
    function getcidadeCliente(){
        return $this->cidadeCliente;
    }
    function getestadoCliente(){
        return $this->estadoCliente;
    }
}
?>