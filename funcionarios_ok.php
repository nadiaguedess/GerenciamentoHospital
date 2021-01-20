<?php

$nome = $_POST ['nome'];
$cpf = $_POST ['cpf'];
$telefone = $_POST ['telefone'];
$tipo = $_POST ['tipo'];


$conexao = mysqli_connect ('localhost', 'root', '');


mysqli_select_db ($conexao, 'hospital');


$sql = "INSERT INTO funcionario (nome,cpf,telefone,tipo) 
values('".$nome."','".$cpf."','".$telefone."','".$tipo."');";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) {
	echo " <script>alert('Cadastrado(a) com sucesso!'); </script>";
	echo " <script>location.href='funcionarios.php'; </script>";
} else{
echo 'Erro!';
}
?>