<html>
<?php
$conexao = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexao, 'hospital');

$sql = "SELECT nome, cpf, telefone FROM paciente where id = '".$_POST ['id']."' ";

$dados = mysqli_query ($conexao, $sql);
$linha = mysqli_fetch_assoc($dados);
?>
<body>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<style>

</style>

<form action="alt_paciente_ok.php" method="POST" >
			
			<input type="hidden" name = "id" id ="id" value="<?php echo $_POST['id'];?>">
			<label class="label">Nome:</label>
			<input class="caixa" type="text" name = "nome"  id ="nome" value="<?php echo $linha['nome'];?>"><br>
			<label class="label">CPF:</label>
			<input class="caixa" type="text" name = "cpf" id ="cpf" value="<?php echo $linha['cpf'];?>"><br>
			<label class="label">Telefone:</label>
			<input class="caixa" type="text" name = "telefone" id ="telefone" value="<?php echo $linha['telefone'];?>"><br>
			<input class="botao" type="submit" value = "Alterar">
			</form>



</body>


</html>