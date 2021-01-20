<?php

$conexao = mysqli_connect ('localhost', 'root', '');

mysqli_select_db ($conexao, 'hospital');


$sql = "update hospital set 
		cnpj = '".$_POST ['cnpj']."',
		nome = '".$_POST ['nome']."',
		telefone_f = '".$_POST ['telefone_f']."',
		telefone_c = '".$_POST ['telefone_c']."'
		
		where id = '".$_POST ['id']."' ";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo " <script>alert('Alterado com sucesso!'); </script>";
echo " <script>location.href='hospitais.php'; </script>";
} else{
echo 'Erro!';
}
?>