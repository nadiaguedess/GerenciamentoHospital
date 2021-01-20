 <?php

 $cnpj= $_POST['cnpj'];
$nome= $_POST['nome'];
$telefone_f= $_POST['telefone_f'];
$telefone_c= $_POST['telefone_c'];


$conexao = mysqli_connect ('localhost', 'root', '');

mysqli_select_db($conexao,'hospital');


$sql = "INSERT INTO hospital (cnpj,nome,telefone_f,telefone_c) values('".$cnpj."','".$nome."','".$telefone_f."','".$telefone_c."');";


$retorno = mysqli_query($conexao, $sql);


if ($retorno == true) {
	echo " <script>alert('Cadastrado(a) com sucesso!'); </script>";
	echo " <script>location.href='hospitais.php'; </script>";
} else{
	echo 'Erro!';
}
?>