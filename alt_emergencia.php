<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php
$conexao = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexao, 'hospital');

$sql = "SELECT gravidade, foto FROM emergencia where id = '".$_POST ['id']."' ";

$dados = mysqli_query ($conexao, $sql);
$linha = mysqli_fetch_assoc($dados);
?>
<body>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<style>
.frmemergencia{margin-top: 100px;}
</style>
</head>
<div id = "frmemergencia">
<form action="alt_emergencia_ok.php" method="POST" >
			
			<input type="hidden" name = "id" id ="id" value="<?php echo $_POST['id'];?>">
			<label class="label">Descrição:</label>
			<input class="caixa" type="text" name = "gravidade" id ="gravidade" value="<?php echo $linha['gravidade'];?>"><br>
			<label class="label">Foto:</label>
			<input class="caixa" type="file" name="foto" id="foto" class="caixa" ><br>
			<input class = "botao" type="submit" value = "Alterar">
			</form>
</div>


</body>


</html>