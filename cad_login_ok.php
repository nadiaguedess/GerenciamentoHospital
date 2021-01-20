 <?php

$login = $_POST['login'];
 $senha = MD5($_POST['senha']);


$conexao = mysqli_connect ('localhost', 'root', '');


mysqli_select_db ($conexao, 'hospital');

if($login =="" or $senha==""){
	
	echo "<script>alert('Digite todos os campos!');window.location.href='cad_login.php'</script>;";
}else{

$sql = "INSERT INTO logar (login,senha) 
values('".$login."','".$senha."');";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) 
{
echo " <script>alert('Cadastrado com sucesso!'); </script>";
echo " <script>location.href='logado.php'; </script>";
} else{
echo 'Erro!';
}

}
?>
 
 
 
