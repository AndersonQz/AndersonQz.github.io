<?php

$servidor = "db4free.net:3306";
$dbname = "fmlrgb";
$dbusuario = "andersonfml";
$dbsenha = "fmlrgbfml";

$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
if (!$conn){
	
	die("conexao falhou: ". mysqli_connect_erro());
}
?>
