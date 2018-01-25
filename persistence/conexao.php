<?php

Class Connection{
	var $servidor;
	var $user;
	var $pass;
	var $bd;
	var $link;
	
	function Connection($servidor,$user, $pass, $bd){;
		$this->servidor = $servidor;
		$this->user = $user;
		$this->pass = $pass;
		$this->bd = $bd;
		
		$this->link = mysqli_connect($this->servidor, $this->user, $this->pass, $this->bd);
		
		if(!$this->link){
			echo 
			"<script type='text/javascript'>
				
				alert('A conexão com o Banco de Dados falhou!');

			</script>";
		}
	}
	
	function getLink(){
		return $this->link;
	}
	
	function fechar(){
		mysqli_close($this->link);
	}
}

?>