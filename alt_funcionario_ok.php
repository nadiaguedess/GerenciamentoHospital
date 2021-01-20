<?php

$conexao = mysqli_connect ('localhost', 'root', '');

mysqli_select_db ($conexao, 'hospital');


$sql = "update funcionario set 
		nome = '".$_POST ['nome']."',
		cpf = '".$_POST ['cpf']."',
		telefone = '".$_POST ['telefone']."',
		tipo = '".$_POST ['tipo']."'
		
		where id = '".$_POST ['id']."' ";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo " <script>alert('Alterado com sucesso!'); </script>";
echo " <script>location.href='funcionarios.php'; </script>";
} else{
echo 'Erro!';
}
?>