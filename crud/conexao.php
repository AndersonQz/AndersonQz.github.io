<?php

$DSN = "mysql:host=localhost;dbnome=crud;charset=utf8";
$USUARIO = "root";
$SENHA = "";

try{
// tem diferencia entre maiusculo e menusculo nos caracteres
	$conexao = new PDO($DSN, $USUARIO, $SENHA);
	
echo " Conectou com sucesso";

} catch(PDOException $erro){
	echo $erro->getMessage();
	exit;

}