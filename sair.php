<?php
session_start();
session_destroy(); //DELETAR TODAS AS VARIAVEIS DA SESSAO

echo " <script>location.href= 'index.php'; </script>";

/* COLOCAR OS SEGUINTE CODIGO DE LINK DENTRO DO ARQUIVO
LIST_IDADE.PHP


<A HREF="sair.php">Sair</a>

*/


?>