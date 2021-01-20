<?php
$senha = '123456';

$cripto = sha1 ($senha);

echo $cripto;



?>

<html>

<body>
<form method="POST" action="logar.php">
<label>Login:</label>
<input type="text"  required="true" name="login" ><br><br>
<label>Senha:</label>
<input type="password"  required="true" name="senha" ><br><br>
<input type="submit" value="Logar" >
</form>
</body>
</html>