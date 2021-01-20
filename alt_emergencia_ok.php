<?php

$conexao = mysqli_connect ('localhost', 'root', '');

mysqli_select_db ($conexao, 'hospital');


$sql = "update emergencia set 
		gravidade = '".$_POST ['gravidade']."',
		foto = '".$_POST ['foto']."'
			
		where id = '".$_POST ['id']."' ";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo " <script>alert('Alterado com sucesso!'); </script>";
echo " <script>location.href='emergencia.php'; </script>";
} else{
echo 'Erro!';
}
?>