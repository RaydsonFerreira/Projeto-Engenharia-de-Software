<?php

include_once("../model/cliente.php");

Class ClienteDAO{
	
	function Cadastrar($cliente, $link){
		$SQL = "INSERT INTO `Cliente` VALUES ('".$cliente->getusernameCliente()."','".$cliente->getsenhaCliente()."','".$cliente->getnomeCliente()."','".$cliente->getruaCliente()."',".$cliente->getnEndCliente().",'".$cliente->getcomplementoCliente()."','".$cliente->getbairroCliente()."',".$cliente->getcepCliente().",'".$cliente->getcidadeCliente()."','".$cliente->getestadoCliente()."');";
		
		if(!mysqli_query($link,$SQL)){
			die("ERRO NA INSERÇÂO DO CLIENTE");
		}
		
		return true;
	}
	
	function Excluir($cliente, $link){
		$SQL = "DELETE FROM cliente WHERE nome = '".$cliente->getNome()."';";
		echo $SQL;
		
		if(!mysqli_query($link,$SQL)){
			die("ERRO NA EXCLUSÃO");
		}
		echo "Cliente EXCLUIDO com sucesso ! ! !";
	}
	
	function Consultar($cliente, $link){
		$SQL = "SELECT * FROM cliente WHERE nome = '".$cliente->getNome()."';";
		echo $SQL;
		
		$retorno = mysqli_query($link,$SQL);
		if(!$retorno){
			die("ERRO NA CONSULTA");
		}
		return $retorno;
	}

	function Logar($cliente, $link){
		$SQL = "SELECT senha FROM Cliente WHERE usernameCliente = '".$cliente->getusernameCliente()."';";
	
		$retorno = mysqli_query($link,$SQL);

		$rs = $retorno->fetch_array();
		
		if(!$rs){
			echo 
			"<script type='text/javascript'>
				
				alert('USUÁRIO OU SENHA INVÁLIDO');

			</script>";
			return false;
		}
		else if($rs["senha"] != $cliente->getsenhaCliente()){
			echo 
			"<script type='text/javascript'>
				
				alert('SENHA INVÁLIDA');

			</script>";
			return false;
		}
		return true;
	}
}

?>
