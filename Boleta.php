<?php
require_once("Banco.php");


class Boleta
{

	function buscarTodasBoletas()
	{
		$sql = "select * from conta";
		$objBanco = new Banco();
		return $dados = $objBanco->query($sql);
	}

	function buscarBoletasporcodigo($codigo)
	
	{
	
		$sql = "select * from conta where cod_conta = '".$codigo."'";
		$objBanco = new Banco();
		return $dados = $objBanco->query($sql);
	
	
	}

}

?>