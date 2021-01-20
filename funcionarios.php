<html>
	<head>
		<!--correçao ortografica -->
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<!--conexão com outros arquivos -->
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<script>

		</script>
		<style>
		.frmfuncionarios{margin-top: 100px;}
		
	
		</style>
	</head>
	<body>
	
	<?php

		$sql = "SELECT id, nome, cpf, telefone, tipo FROM funcionario";

		require_once('Banco_List_Paciente.php');
		$objBanco = new Banco();
		$dados = $objBanco->query($sql);



		$qtdelinhas = mysqli_num_rows($dados);
	?>
		
	
		<center>
		<div id = "menu" >
		<center><font class="texto">H.E.R.S</font></center>
		<label class="link"><a href ="logado.php">Sair</a></label><label>
	
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
					
					<li><a href="funcionarios.php">Funcionários</a></li>
				
					
					<li><a href="paciente.php">Paciente</a></li>
				</ul>
			</li>
			<div class="clear"></div>
		</ul>

		</center>		
		</div>
		</center>
		<center>
		
		<div class= "frmfuncionarios">
	
				<form action="funcionarios_ok.php" method="POST">
			 
					<label class="label">Nome:</label>

					<input type="text" name="nome" id="nome" class="caixa" size= "20"><br><br>
					
					<label class="label">CPF:</label>

					<input type="text" name="cpf" id="cpf" class="caixa"><br><br>

					<label class="label">Telefone:</label>

					<input type="text" name="telefone" id="telefone" class="caixa"><br><br>
					
					<label class="label">Tipo:</label>

					<input type="text" name="tipo" id="tipo" class="caixa"><br><br>
					
					<input type="submit" value="Cadastrar" class="botao">
					<input type="reset" value="Limpar" class="botao">
			
				</form>
	
		</div>
		
		</center>
		<center>
		<table border="1" width="20%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>CPF</th>
			<th>Telefone</th>
			<th>Tipo</th>
			<th>Acoes Excluir</th>
			<th>Acoes Alterar</th>
			
		</tr>	
	</thead>
		<tbody>
		
		
	<?php

	for($x = 0; $x < $qtdelinhas; $x++) /*estrutura de repeticao FOR*/
	{
	$linha = mysqli_fetch_assoc($dados);
		
	?>	
		<tr>
			<td><?php echo $linha['id'];  ?></td>
			<td><?php echo $linha['nome'];  ?></td>
			<td><?php echo $linha['cpf'];  ?></td>
			<td><?php echo $linha['telefone'];  ?></td>
			<td><?php echo $linha['tipo'];  ?></td>
			
			<form action="alt_funcionario.php" method="POST" name="alterar">
			<td>
			<input type="hidden" name = "id" id ="id" value="<?php echo $linha['id'];?>">
			<input type="submit" value = "Alterar" class ="botao1">
			</td>
			</form>
			<form action="exc_funcionario.php" method="POST" name="excluir">
			<td>
			<input type="hidden" name = "id" id ="id" value="<?php echo $linha['id'];?>">
			<input type="submit" value = "Excluir" class ="botao1">
			
			
			</td>
			</form>
			
			
		</tr>
		
		<?php
		}
		?>
</tbody>	
</table>
</center>
	</body>
</html>