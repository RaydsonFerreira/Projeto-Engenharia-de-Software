<?php

include_once("../model/funcionario.php");

class FuncionarioDAO{

    function Logar($funcionario, $link){
        $SQL = "SELECT * FROM Funcionario WHERE usernameFunc = '".$funcionario->getUsernameFunc()."';";

        $retorno = mysqli_query($link, $SQL);

        $rs = $retorno->fetch_array();
        
		if(!$rs){
			die("USUÁRIO OU SENHA INCORRETOS");
			return false;
        }

        if($rs["senha"] != $funcionario->getSenhaFunc()){
            die("SENHA INCORRETA");
            return false;
        }

        if($rs["tipoFunc"] != $funcionario->getCargoFunc()){
            die("CARGO INCORRETO");
            return false;
        }
        return true;
    }
}
?>