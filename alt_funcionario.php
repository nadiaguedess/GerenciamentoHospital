<html>
<?php
$conexao = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexao, 'hospital');

$sql = "SELECT nome, cpf, telefone, tipo FROM funcionario where id = '".$_POST ['id']."' ";

$dados = mysqli_query ($conexao, $sql);
$linha = mysqli_fetch_assoc($dados);
?>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<style>
.frmfuncionarios{margin-top: 100px;}
</style>
</head>
<body>
<div id = "frmfuncionarios">
<form action="alt_funcionario_ok.php" method="POST" >
			
			<input type="hidden" name = "id" id ="id" value="<?php echo $_POST['id'];?>">
			<label class="label">Nome:</label>
			<input class="caixa" type="text" name = "nome" id ="nome" value="<?php echo $linha['nome'];?>"><br>
			<label class="label">CPF:</label>
			<input class="caixa" type="text" name = "cpf" id ="cpf" value="<?php echo $linha['cpf'];?>"><br>
			<label class="label">Telefone:</label>
			<input class="caixa" type="text" name = "telefone" id ="telefone" value="<?php echo $linha['telefone'];?>"><br>
			<label class="label">Tipo:</label>
			<input class="caixa" type="text" name = "tipo" id ="tipo" value="<?php echo $linha['tipo'];?>"><br>
			<input type="submit" value = "Alterar" class= "botao">
			</form>

</div>

</body>


</html>