<?php 

class Banco{
	
	var $conexao;
	
	public function __construct(){
	
		$this->conexao = mysqli_connect('localhost', 'root', '');
		mysqli_select_db($this->conexao, 'hospital');
	
	}

	public function query($sql){
	
		return mysqli_query($this->conexao, $sql);
	
	}
}

?>