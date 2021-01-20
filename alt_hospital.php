<html>
<?php
$conexao = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexao, 'hospital');

$sql = "SELECT cnpj, nome, telefone_f, telefone_c FROM hospital where id = '".$_POST ['id']."' ";

$dados = mysqli_query ($conexao, $sql);
$linha = mysqli_fetch_assoc($dados);
?>
<body>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<style>
.frmhospital{margin-top: 100px;}
</style>
</head>
<div id = "frmhospital">
<form action="alt_hospital_ok.php" method="POST" >
			
			<input type="hidden" name = "id" id ="id" value="<?php echo $_POST['id'];?>">
			<label class="label">CNPJ:</label>
			<input class = "caixa" type="text" name = "cnpj" id ="cnpj" value="<?php echo $linha['cnpj'];?>"><br>
			<label class="label">Nome:</label>
			<input class = "caixa" type="text" name = "nome" id ="nome" value="<?php echo $linha['nome'];?>"><br>
			<label class="label">Telefone Fixo:</label>
			<input class = "caixa" type="text" name = "telefone_f" id ="telefone_f" value="<?php echo $linha['telefone_f'];?>"><br>
			<label class="label">Telefone Celular:</label>
			<input class = "caixa" type="text" name = "telefone_c" id ="telefone_c" value="<?php echo $linha['telefone_c'];?>"><br>
			<input class = "botao" type="submit" value = "Alterar">
			</form>
</div>


</body>


</html>