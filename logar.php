<?php
session_start();

$login = $_POST['login'];
$senha = sha1($_POST['senha']);

$conexao = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexao, 'aula');

$sql = " SELECT cod_usuario, login, senha FROM usuario
			WHERE senha = '".$senha."' and login = '".$login."' ";
			
$dados = mysqli_query ($conexao, $sql);

$qtde_linhas = mysqli_num_rows($dados);

if($qtde_linhas == 0){
	echo " <script>alert('Usuário e senha incorretos!'); </script>";
	echo " <script>location.href ='index.php'; </script>";
}else{
	$_SESSION['login'] = $login;
	echo " <script>location.href= 'list_idade.php'; </script>";
}
?>