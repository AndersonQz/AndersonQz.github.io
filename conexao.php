<?php

$servidor = "localhost";
$dbname = "crud";
$dbusuario = "root";
$dbsenha = "";

$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
if (!$conn){
	
	die("conexao falhou: ". mysqli_connect_erro());
}
?>