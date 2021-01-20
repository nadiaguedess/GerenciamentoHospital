<?php

$id = $_POST ['id'];


$conexao = mysqli_connect ('localhost', 'root', '');


mysqli_select_db ($conexao, 'hospital');


$sql = "delete from hospital where id = '".$id."' ";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo " <script>alert('Excluido com sucesso!'); </script>";
echo " <script>location.href='hospitais.php'; </script>";
} else{
echo 'Erro!';
}
?>