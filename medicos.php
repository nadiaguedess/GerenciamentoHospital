<html>
	<head>
		<!--correçao ortografica -->
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<!--conexão com outros arquivos -->
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<script>
		</script>
		
		<style>
		
		#frmmedicos {margin-top: 100px;}
				
		</style>
	</head>
	<body>
	
		<center>
		<div id = "menu" >
		<center><font class="texto">H.E.R.S</font></center>
		<label class="link"></label><label><a href ="cad_login.php">Cadastrar</a></label>
	
		<center>
		<hr></hr>
		<ul>
			<center>
			<li><a href ="indexlogado.php">Início</a></li>
			</center>
		</ul>
		
		<ul>
			<li><a href ="emergencia.php">Emergêcia</a></li>
		</ul>
		
		<ul>
			<li><a href="hospitais.php">Hospitais</a>
				<ul>
					<li><a href="#">Médicos</a></li>
					<li><a href="usuario.php">Usuários</a></li>
					<li><a href="funcionarios.php">Funcionários</a></li>
				</ul>
			</li>
			<div class="clear"></div>
		</ul>

		</center>		
		</div>
		</center>
		<center>
		<div id="frmmedicos">
			<form  action = "medico_ok.php" method= "POST">
						 
				<label>CRM:</label>

				<input type="text" name="crm" id="crm" class="caixa"><br><br>
				
						<label>Nome:</label>

							<input type="text" name="nome" id="nome" class="caixa"><br><br>

				
				<input type="submit" value="Cadastrar" class="botao">
				<input type="reset" value="Limpar" class="botao">
					
			</form>		
		</div>
		</center>
							
	</body>
</html>