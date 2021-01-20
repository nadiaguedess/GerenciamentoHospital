<?php
    $login = $_POST['login'];
	$senha = md5($_POST['senha']);
    $entrar = $_POST['entrar'];
    
    $connect = mysql_connect('localhost','root','');
	
    $db = mysql_select_db('hospital');
	
	
		if($login =="" or $senha==""){
			
			echo "<script>alert('Digite todos os campos!');window.location.href='logado.php'</script>;";
			
		}else{
	
        if (isset($entrar)) 
		{
                     
            $verifica = mysql_query("SELECT * FROM logar WHERE login = '$login' AND senha = '$senha'") 
			or die
			("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0)
				{
                    echo"<script language='javascript' type='text/javascript'>
					alert('Login e/ou senha incorretos');window.location.href='logado.php';</script>";
                    die();
                }else{
                    setcookie("login",$login);
                    header("Location:indexlogado.php");
                }
        }
		}
?>