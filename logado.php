<html>
<head>
	<!--correçao ortografica -->
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<!--conexão com outros arquivos -->
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<script>

		</script>
		<style>
		#frmfuncionarios {margin-top: 100px;}
		.form{

	width: 250px;
	border: 10px solid #FFE5CC;
	border-spacing: 10px;
	font-family: Arial, monospace;
	font-size: 14px;
	border-bottom: 2px solid #FFE5CC;
	border-top: 10px solid #FFE5CC;
	margin: 10px;
	background-color: pink;
	font-family: arial;
	color: black;
	font-size:14px;
	background-color: white;
	background-color: pink;
	border-bottom: 10px solid #FFE5CC;
	padding: 20px;	
}
		
		</style>
<title> Login de Usuário </title>
</head>
<body>
<center>
<form method="POST" action="login.php" class="form">

<label>Login:</label>
<input type="text" name="login" id="login" class="caixa"><br><br>

<label>Senha:</label>
<input type="password" name="senha" id="senha" class="caixa"><br><br>

<input type="submit" value="Entrar" id="entrar" name="entrar" class="botao"><br>

<a href="cad_login.php" >Cadastre-se</a>
</form>
</center>

</body>
</html>

