<?php

 include_once "comm.php";

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];

 $sql_verifica = "SELECT * FROM cliente WHERE email = :EMAIL";
 $stmt_verifica = $comm->prepare($sql_verifica);

 $stmt_verifica->bindParam(':EMAIL', $email) ;
 $stmt_verifica->execute();

 if($stmt_verifica->rowCount() > 0) {

//Já possui cadastro.
 echo"ja Cadastrado ";
 echo Json_encode (array("CAD"=>"ERRO_EMAIL"));
 } 
 
 else {

//Vai cadastrar um novo.
 echo"Novo Cadastro Realizado com sussesso!";
$sql_salvar = "INSERT INTO cliente (nome, email, telefone) ";
$sql_salvar .= "valures (:NOME, :EMAIL, :TELEFONE)";

$stmt_salvar = $comm->prepare($sql_salvar);

$stmt_salvar->bindParam(':NOME', $nome);
$stmt_salvar->bindParam(':EMAIL', $email);
$stmt_salvar->bindParam(':TELEFONE', $telefone);

if($stmt_salvar->execute()){
     echo Json_encode (array("CAD"=>"ok"));

 }else{

     echo Json_encode (array("CAD"=>"ERRO"));

 }

}
?>