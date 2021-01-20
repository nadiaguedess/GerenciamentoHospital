<?php
if($_FILES['foto']['type'] == 'image/jpeg')
	{

	$data_atual = date('Y-m-d H:i:s');
	$nomeArquivo = md5($data_atual);
	$nomeAquivo = 'foto/'.$nomeArquivo.'.jpg';
	
	copy($_FILES['foto']['tmp_name'],$nomeArquivo);
	
	$conexao = mysqli_connect('localhost','root','');
	
	mysqli_select_db($conexao,'hospital');
	
	$sql = "INSERT INTO emergencia (gravidade,foto) values ('".$_POST['descricao']."', '".$nomeArquivo."');";
	$retorno = mysqli_query($conexao, $sql);
	
	if($retorno == true)
	{
		echo " <script>alert('Cadastrado(a) com sucesso!'); </script>";
		echo " <script>location.href='emergencia.php'; </script>";
	}
	if($retorno == false)
	{
		echo 'Erro no SQL';
	}
	
	}

else
	{
		echo 'Formato invalido!';
	}

?>