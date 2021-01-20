<?php

$conexao = mysqli_connect ('localhost', 'root', '');

mysqli_select_db ($conexao, 'hospital');


$sql = "update paciente set 
		nome = '".$_POST ['nome']."',
		cpf = '".$_POST ['cpf']."',
		telefone = '".$_POST ['telefone']."'
		
		where id = '".$_POST ['id']."' ";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo " <script>alert('Alterado com sucesso!'); </script>";
echo " <script>location.href='paciente.php'; </script>";
} else{
echo 'Erro!';
}
?>