<?php

$nome = $_POST ['nome'];
$cpf = $_POST ['cpf'];
$telefone = $_POST ['telefone'];


$conexao = mysqli_connect ('localhost', 'root', '');


mysqli_select_db ($conexao, 'hospital');


$sql = "INSERT INTO paciente (nome,cpf,telefone) 
values('".$nome."','".$cpf."','".$telefone."');";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo " <script>alert('$nome cadastrado com sucesso!'); </script>";
echo " <script>location.href='paciente.php'; </script>";
} else{
echo 'Erro!';
}
?>